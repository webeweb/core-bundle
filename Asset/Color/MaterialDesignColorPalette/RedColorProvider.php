<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Asset\Color\AbstractColorProvider;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\RedColorProviderInterface;

/**
 * Red color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
class RedColorProvider extends AbstractColorProvider implements RedColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.asset.color.red";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::COLOR_DOMAIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): array {
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
     *{@inheritDoc}
     */
    public function getName(): string {
        return self::RED_COLOR_NAME;
    }
}
