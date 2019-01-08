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

use WBW\Bundle\CoreBundle\Provider\Color\RedColorProviderInterface;

/**
 * Red color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class RedColorProvider extends AbstractColorProvider implements RedColorProviderInterface, ColorInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.color.red";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("MaterialDesignColorPalette");
    }

    /**
     * {@inheritdoc}
     */
    public function getColors() {
        return [
            self::COLOR_50   => self::RED_COLOR_50,
            self::COLOR_100  => self::RED_COLOR_100,
            self::COLOR_200  => self::RED_COLOR_200,
            self::COLOR_300  => self::RED_COLOR_300,
            self::COLOR_400  => self::RED_COLOR_400,
            self::COLOR_500  => self::RED_COLOR_500,
            self::COLOR_600  => self::RED_COLOR_600,
            self::COLOR_700  => self::RED_COLOR_700,
            self::COLOR_A100 => self::RED_COLOR_A100,
            self::COLOR_A200 => self::RED_COLOR_A200,
            self::COLOR_A400 => self::RED_COLOR_A400,
            self::COLOR_A700 => self::RED_COLOR_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::RED_COLOR_NAME;
    }

}
