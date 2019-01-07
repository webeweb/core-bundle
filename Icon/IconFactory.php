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

}
