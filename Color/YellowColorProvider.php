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
 * Yellow color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class YellowColorProvider implements YellowColorInterface, ColorProviderInterface {

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
            self::COLOR_50   => self::COLOR_YELLOW_50,
            self::COLOR_100  => self::COLOR_YELLOW_100,
            self::COLOR_200  => self::COLOR_YELLOW_200,
            self::COLOR_300  => self::COLOR_YELLOW_300,
            self::COLOR_400  => self::COLOR_YELLOW_400,
            self::COLOR_500  => self::COLOR_YELLOW_500,
            self::COLOR_600  => self::COLOR_YELLOW_600,
            self::COLOR_700  => self::COLOR_YELLOW_700,
            self::COLOR_A100 => self::COLOR_YELLOW_A100,
            self::COLOR_A200 => self::COLOR_YELLOW_A200,
            self::COLOR_A400 => self::COLOR_YELLOW_A400,
            self::COLOR_A700 => self::COLOR_YELLOW_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::COLOR_YELLOW;
    }

}
