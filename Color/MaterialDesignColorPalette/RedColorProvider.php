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
use WBW\Bundle\CoreBundle\Provider\Color\RedColorProviderInterface;

/**
 * Red color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class RedColorProvider extends AbstractColorProvider implements RedColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.red";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(static::COLOR_DOMAIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): array {
        return [
            static::COLOR_50   => static::RED_COLOR_50,
            static::COLOR_100  => static::RED_COLOR_100,
            static::COLOR_200  => static::RED_COLOR_200,
            static::COLOR_300  => static::RED_COLOR_300,
            static::COLOR_400  => static::RED_COLOR_400,
            static::COLOR_500  => static::RED_COLOR_500,
            static::COLOR_600  => static::RED_COLOR_600,
            static::COLOR_700  => static::RED_COLOR_700,
            static::COLOR_A100 => static::RED_COLOR_A100,
            static::COLOR_A200 => static::RED_COLOR_A200,
            static::COLOR_A400 => static::RED_COLOR_A400,
            static::COLOR_A700 => static::RED_COLOR_A700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return static::RED_COLOR_NAME;
    }
}
