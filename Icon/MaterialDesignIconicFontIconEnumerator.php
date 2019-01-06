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
 * Material design iconic font icon enumerator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
class MaterialDesignIconicFontIconEnumerator {

    /**
     * Enumerates the borders.
     *
     * @return array Returns the borders enumeration.
     */
    public static function enumBorders() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER_CIRCLE,
        ];
    }

    /**
     * Enumerates the flips.
     *
     * @return array Returns the flips enumeration.
     */
    public static function enumFlips() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_VERTICAL,
        ];
    }

    /**
     * Enumerates the pulls.
     *
     * @return array Returns the pulls enumeration.
     */
    public static function enumPulls() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_RIGHT,
        ];
    }

    /**
     * Enumerates the rotates.
     *
     * @return array Returns the rotates enumeration.
     */
    public static function enumRotates() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_180,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_270,
        ];
    }

    /**
     * Enumerates the sizes.
     *
     * @return array Returns the sizes enumaration.
     */
    public static function enumSizes() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_2X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_3X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_4X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_5X,
        ];
    }

    /**
     * Enumerates the spins.
     *
     * @return array Returns the spins enumeration.
     */
    public static function enumSpins() {
        return [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN_REVERSE,
        ];
    }

}
