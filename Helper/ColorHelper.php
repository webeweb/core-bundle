<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Color helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class ColorHelper {

    /**
     * Get an identifier.
     *
     * @param ColorProviderInterface $colorProvider The color provider.
     * @return string Returns the identifier.
     */
    public static function getIdentifier(ColorProviderInterface $colorProvider) {
        return implode(":", [$colorProvider->getDomain(), $colorProvider->getName()]);
    }

    /**
     * Get the Material Design Color Palette.
     *
     * @return ColorProviderInterface[] Returns the Material Design Color Palette.
     */
    public static function getMaterialDesignColorPalette() {
        return [
            new RedColorProvider(),
            new PinkColorProvider(),
            new PurpleColorProvider(),
            new DeepPurpleColorProvider(),
            new IndigoColorProvider(),
            new BlueColorProvider(),
            new LightBlueColorProvider(),
            new CyanColorProvider(),
            new TealColorProvider(),
            new GreenColorProvider(),
            new LightGreenColorProvider(),
            new LimeColorProvider(),
            new YellowColorProvider(),
            new AmberColorProvider(),
            new OrangeColorProvider(),
            new DeepOrangeColorProvider(),
            new BrownColorProvider(),
            new GreyColorProvider(),
            new BlueGreyColorProvider(),
        ];
    }
}
