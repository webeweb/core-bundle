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

use WBW\Bundle\CoreBundle\Form\Renderer\FormRenderer;

/**
 * Form factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Factory
 */
class FormFactory {

    /**
     * Create a choice type.
     *
     * @param array $choices The choices.
     * @return array Returns the choice type.
     */
    public static function newChoiceType(array $choices = []) {
        return [
            "choices" => array_flip($choices)
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

        // Check the options.
        if (false === array_key_exists("empty", $options)) {
            $options["empty"] = false;
        }
        if (false === array_key_exists("translator", $options)) {
            $options["translator"] = null;
        }

        // Initialize the output.
        $output = [
            "class"        => $class,
            "choices"      => [],
            "choice_label" => function($entity) use($options) {
                return FormRenderer::renderOption($entity, $options["translator"]);
            },
        ];

        // Add an empty choice.
        if (true === $options["empty"]) {
            $output["choices"][] = null;
        }

        // Add all choices.
        $output["choices"] = array_merge($output["choices"], $choices);

        // Return the output.
        return $output;
    }

}
