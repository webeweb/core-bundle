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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\WhiteColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\YellowColorProvider;
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
    public static function getIdentifier(ColorProviderInterface $colorProvider): string {
        return implode(":", [$colorProvider->getDomain(), $colorProvider->getName()]);
    }

    /**
     * Get the Material Design Color Palette.
     *
     * @return ColorProviderInterface[] Returns the Material Design Color Palette.
     */
    public static function getMaterialDesignColorPalette(): array {
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
            new BlackColorProvider(),
            new WhiteColorProvider(),
        ];
    }
}
