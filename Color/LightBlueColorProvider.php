<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Light blue color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class LightBlueColorProvider implements LightBlueColorInterface, ColorProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getColors() {
        return [
            self::COLOR_50   => self::COLOR_LIGHT_BLUE_50,
            self::COLOR_100  => self::COLOR_LIGHT_BLUE_100,
            self::COLOR_200  => self::COLOR_LIGHT_BLUE_200,
            self::COLOR_300  => self::COLOR_LIGHT_BLUE_300,
            self::COLOR_400  => self::COLOR_LIGHT_BLUE_400,
            self::COLOR_500  => self::COLOR_LIGHT_BLUE_500,
            self::COLOR_600  => self::COLOR_LIGHT_BLUE_600,
            self::COLOR_700  => self::COLOR_LIGHT_BLUE_700,
            self::COLOR_A100 => self::COLOR_LIGHT_BLUE_A100,
            self::COLOR_A200 => self::COLOR_LIGHT_BLUE_A200,
            self::COLOR_A400 => self::COLOR_LIGHT_BLUE_A400,
            self::COLOR_A700 => self::COLOR_LIGHT_BLUE_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::COLOR_LIGHT_BLUE;
    }

}
