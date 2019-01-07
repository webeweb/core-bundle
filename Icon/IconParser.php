<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon;

use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Icon parser.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
class IconParser {

    /**
     * Parses a Font Awesome icon.
     *
     * @param array $args The arguments.
     * @return FontAwesomeIconInterface Returns the parsed Font Awesome icon.
     */
    public static function parseFontAwesomeIcon(array $args) {

        // Initialize the icon.
        $icon = IconFactory::newFontAwesomeIcon();

        $icon->setName(ArrayHelper::get($args, "name", "home"));
        $icon->setStyle(ArrayHelper::get($args, "style"));

        $icon->setAnimation(ArrayHelper::get($args, "animation"));
        $icon->setBordered(ArrayHelper::get($args, "bordered", false));
        $icon->setFixedWidth(ArrayHelper::get($args, "fixedWidth", false));
        $icon->setFont(ArrayHelper::get($args, "font"));
        $icon->setPull(ArrayHelper::get($args, "pull"));
        $icon->setSize(ArrayHelper::get($args, "size"));

        // Return the icon.
        return $icon;
    }

    /**
     * Parses a Material Design Iconic Font icon.
     *
     * @param array $args The arguments.
     * @return MaterialDesignIconicFontIconInterface Returns the parsed Material Design Iconic Font icon.
     */
    public static function parseMaterialDesignIconicFontIcon(array $args) {

        // Initialize the icon.
        $icon = IconFactory::newMaterialDesignIconicFontIcon();

        $icon->setName(ArrayHelper::get($args, "name", "home"));
        $icon->setStyle(ArrayHelper::get($args, "style"));

        $icon->setBorder(ArrayHelper::get($args, "border", false));
        $icon->setFixedWidth(ArrayHelper::get($args, "fixedWidth", false));
        $icon->setFlip(ArrayHelper::get($args, "flip"));
        $icon->setPull(ArrayHelper::get($args, "pull"));
        $icon->setRotate(ArrayHelper::get($args, "rotate"));
        $icon->setSize(ArrayHelper::get($args, "size"));
        $icon->setSpin(ArrayHelper::get($args, "spin"));

        // Return the icon.
        return $icon;
    }

}
