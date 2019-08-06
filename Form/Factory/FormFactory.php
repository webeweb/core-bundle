<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Factory;

use Closure;
use WBW\Bundle\CoreBundle\Entity\ChoiceValueInterface;
use WBW\Bundle\CoreBundle\Form\Renderer\FormRenderer;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Form factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Factory
 */
class FormFactory {

    /**
     * Get a choice label closure.
     *
     * @param array $options The options
     * @return Closure Returns the choice label closure.
     */
    protected static function getChoiceLabelClosure(array $options) {

        $options["translator"] = ArrayHelper::get($options, "translator", null);

        return function($entity) use ($options) {
            return FormRenderer::renderOption($entity, $options["translator"]);
        };
    }

    /**
     * Get a choice value closure.
     *
     * @return Closure Returns the choice value closure.
     */
    public static function getChoiceValueClosure() {
        return function(ChoiceValueInterface $entity = null) {
            return null !== $entity ? $entity->getChoiceValue() : "";
        };
    }

    /**
     * Create a choice type.
     *
     * @param array $choices The choices.
     * @return array Returns the choice type.
     */
    public static function newChoiceType(array $choices = []) {
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
    public static function newEntityType($class, array $choices = [], array $options = []) {

        $output = [
            "class"        => $class,
            "choices"      => [],
            "choice_label" => static::getChoiceLabelClosure($options),
        ];

        if (true === is_subclass_of($class, ChoiceValueInterface::class)) {
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
