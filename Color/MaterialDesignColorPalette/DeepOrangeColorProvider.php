<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Color\AbstractColorProvider;
use WBW\Bundle\CoreBundle\Provider\Color\DeepOrangeColorProviderInterface;

/**
 * Deep orange color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class DeepOrangeColorProvider extends AbstractColorProvider implements DeepOrangeColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.color.deep_orange";

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
            self::COLOR_50   => self::DEEP_ORANGE_COLOR_50,
            self::COLOR_100  => self::DEEP_ORANGE_COLOR_100,
            self::COLOR_200  => self::DEEP_ORANGE_COLOR_200,
            self::COLOR_300  => self::DEEP_ORANGE_COLOR_300,
            self::COLOR_400  => self::DEEP_ORANGE_COLOR_400,
            self::COLOR_500  => self::DEEP_ORANGE_COLOR_500,
            self::COLOR_600  => self::DEEP_ORANGE_COLOR_600,
            self::COLOR_700  => self::DEEP_ORANGE_COLOR_700,
            self::COLOR_A100 => self::DEEP_ORANGE_COLOR_A100,
            self::COLOR_A200 => self::DEEP_ORANGE_COLOR_A200,
            self::COLOR_A400 => self::DEEP_ORANGE_COLOR_A400,
            self::COLOR_A700 => self::DEEP_ORANGE_COLOR_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::DEEP_ORANGE_COLOR_NAME;
    }
}
