<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Icon\FontAwesome;

/**
 * Font Awesome icon enumerator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Icon\FontAwesome
 */
class FontAwesomeIconEnumerator {

    /**
     * Enumerates the animations.
     *
     * @return string[] Returns the animations enumeration.
     */
    public static function enumAnimations(): array {
        return [
            FontAwesomeIconInterface::FONT_AWESOME_ANIMATION_PULSE,
            FontAwesomeIconInterface::FONT_AWESOME_ANIMATION_SPIN,
        ];
    }

    /**
     * Enumerates the fonts.
     *
     * @return string[] Returns the fonts enumeration.
     */
    public static function enumFonts(): array {
        return [
            FontAwesomeIconInterface::FONT_AWESOME_FONT,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_BOLD,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_LIGHT,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_REGULAR,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_SOLID,
        ];
    }

    /**
     * Enumerates the pulls.
     *
     * @return string[] Returns the pulls enumeration.
     */
    public static function enumPulls(): array {
        return [
            FontAwesomeIconInterface::FONT_AWESOME_PULL_LEFT,
            FontAwesomeIconInterface::FONT_AWESOME_PULL_RIGHT,
        ];
    }

    /**
     * Enumerates the sizes.
     *
     * @return string[] Returns the sizes enumeration.
     */
    public static function enumSizes(): array {
        return [
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_LG,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_SM,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_XS,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_2X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_3X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_4X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_5X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_6X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_7X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_8X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_9X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_10X,
        ];
    }
}
