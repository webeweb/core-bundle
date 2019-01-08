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

use WBW\Bundle\CoreBundle\Color\AmberColorProvider;
use WBW\Bundle\CoreBundle\Color\BlueColorProvider;
use WBW\Bundle\CoreBundle\Color\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Color\BrownColorProvider;
use WBW\Bundle\CoreBundle\Color\CyanColorProvider;
use WBW\Bundle\CoreBundle\Color\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\GreenColorProvider;
use WBW\Bundle\CoreBundle\Color\GreyColorProvider;
use WBW\Bundle\CoreBundle\Color\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Color\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Color\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Color\LimeColorProvider;
use WBW\Bundle\CoreBundle\Color\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\PinkColorProvider;
use WBW\Bundle\CoreBundle\Color\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\RedColorProvider;
use WBW\Bundle\CoreBundle\Color\TealColorProvider;
use WBW\Bundle\CoreBundle\Color\YellowColorProvider;
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
