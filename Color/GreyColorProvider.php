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
 * Grey color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class GreyColorProvider implements GreyColorInterface, ColorProviderInterface {

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
            self::COLOR_50  => self::COLOR_GREY_50,
            self::COLOR_100 => self::COLOR_GREY_100,
            self::COLOR_200 => self::COLOR_GREY_200,
            self::COLOR_300 => self::COLOR_GREY_300,
            self::COLOR_400 => self::COLOR_GREY_400,
            self::COLOR_500 => self::COLOR_GREY_500,
            self::COLOR_600 => self::COLOR_GREY_600,
            self::COLOR_700 => self::COLOR_GREY_700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::COLOR_GREY;
    }

}