<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\Form;

use Closure;
use ReflectionClass;
use ReflectionException;
use WBW\Bundle\CoreBundle\Asset\Select\ChoiceValueInterface;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Form factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Component\Form
 */
class FormFactory {

    /**
     * Get a choice label closure.
     *
     * @param array $options The options
     * @return Closure Returns the choice label closure.
     */
    protected static function getChoiceLabelClosure(array $options): Closure {

        $options["translator"] = ArrayHelper::get($options, "translator");

        return function($entity) use ($options): string {
            return FormRenderer::renderOption($entity, $options["translator"]);
        };
    }

    /**
     * Get a choice value closure.
     *
     * @return Closure Returns the choice value closure.
     */
    public static function getChoiceValueClosure(): Closure {
        return function(ChoiceValueInterface $entity = null): ?string {
            return null !== $entity ? $entity->getChoiceValue() : "";
        };
    }

    /**
     * Determines if a class is a choice value interface.
     *
     * @param string $class The class.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected static function isChoiceValueInterface(string $class): bool {
        try {
            return (new ReflectionClass($class))->implementsInterface(ChoiceValueInterface::class);
        } catch (ReflectionException $ex) {
            return false;
        }
    }

    /**
     * Create a choice type.
     *
     * @param array $choices The choices.
     * @return array Returns the choice type.
     */
    public static function newChoiceType(array $choices = []): array {
        return [
            "choices" => array_flip($choices),
        ];
    }

    /**
     * Create an entity type.
     *
     * @param string $class The class.
     * @param array $choices The choices.
     * @param array $options The options.
     * @return array $choices Returns the entity type.
     */
    public static function newEntityType(string $class, array $choices = [], array $options = []): array {

        $output = [
            "class"        => $class,
            "choices"      => [],
            "choice_label" => static::getChoiceLabelClosure($options),
        ];

        if (true === static::isChoiceValueInterface($class)) {
            $output["choice_value"] = static::getChoiceValueClosure();
        }

        $options["empty"] = ArrayHelper::get($options, "empty", false);
        if (true === $options["empty"]) {
            $output["choices"][] = null;
        }

        $output["choices"] = array_merge($output["choices"], $choices);

        return $output;
    }
}
