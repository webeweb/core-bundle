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

use WBW\Bundle\CoreBundle\Asset\Select\ChoiceLabelInterface;
use WBW\Bundle\CoreBundle\Asset\Select\TranslatedChoiceLabelInterface;
use WBW\Library\Sorter\Helper\AlphabeticalTreeNodeHelper;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;

/**
 * Form renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Component\Form
 */
class FormRenderer {

    /**
     * Render an option.
     *
     * @param mixed $option The option.
     * @param BaseTranslatorInterface|null $translator The translator service.
     * @return string Returns the rendered option.
     */
    public static function renderOption($option, $translator = null): string {

        if (null === $option) {
            return null !== $translator ? $translator->trans("label.empty_selection") : "Empty selection";
        }

        if (true === ($option instanceof TranslatedChoiceLabelInterface)) {
            $output = $option->getTranslatedChoiceLabel($translator);
        } else if (true === ($option instanceof ChoiceLabelInterface)) {
            $output = $option->getChoiceLabel();
        } else {
            $output = "This option must implements [Translated]ChoiceLabelInterface";
        }

        if (true === ($option instanceof AlphabeticalTreeNodeInterface)) {

            $level  = AlphabeticalTreeNodeHelper::getLevel($option);
            $nbsp   = html_entity_decode("&nbsp;");
            $symbol = html_entity_decode(0 === $level ? "&#9472;" : "&#9492;");

            $output = implode("", [
                str_repeat($nbsp, $level * 3),
                $symbol,
                $nbsp,
                $output,
            ]);
        }

        return $output;
    }
}
