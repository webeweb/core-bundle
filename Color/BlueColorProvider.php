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

use WBW\Bundle\CoreBundle\Provider\Color\BlueColorProviderInterface;

/**
 * Blue color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class BlueColorProvider extends AbstractColorProvider implements BlueColorProviderInterface, ColorInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.color.blue";

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
            self::COLOR_50   => self::BLUE_COLOR_50,
            self::COLOR_100  => self::BLUE_COLOR_100,
            self::COLOR_200  => self::BLUE_COLOR_200,
            self::COLOR_300  => self::BLUE_COLOR_300,
            self::COLOR_400  => self::BLUE_COLOR_400,
            self::COLOR_500  => self::BLUE_COLOR_500,
            self::COLOR_600  => self::BLUE_COLOR_600,
            self::COLOR_700  => self::BLUE_COLOR_700,
            self::COLOR_A100 => self::BLUE_COLOR_A100,
            self::COLOR_A200 => self::BLUE_COLOR_A200,
            self::COLOR_A400 => self::BLUE_COLOR_A400,
            self::COLOR_A700 => self::BLUE_COLOR_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::BLUE_COLOR_NAME;
    }

}
