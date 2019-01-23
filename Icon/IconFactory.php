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

use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIcon;
use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIcon;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIconInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Icon factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
class IconFactory {

    /**
     * Creates a Font Awesome icon.
     *
     * @return FontAwesomeIconInterface Returns the Font Awesome icon.
     */
    public static function newFontAwesomeIcon() {
        return new FontAwesomeIcon();
    }

    /**
     * Creates a Material Design Iconic Font icon
     *
     * @return MaterialDesignIconicFontIconInterface Returns the Material Design Iconic Font icon.
     */
    public static function newMaterialDesignIconicFontIcon() {
        return new MaterialDesignIconicFontIcon();
    }

    /**
     * Parses a Font Awesome icon.
     *
     * @param array $args The arguments.
     * @return FontAwesomeIconInterface Returns the parsed Font Awesome icon.
     */
    public static function parseFontAwesomeIcon(array $args) {

        // Initialize the icon.
        $icon = static::newFontAwesomeIcon();

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
        $icon = static::newMaterialDesignIconicFontIcon();

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
