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
use WBW\Bundle\CoreBundle\Provider\Color\OrangeColorProviderInterface;

/**
 * Orange color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class OrangeColorProvider extends AbstractColorProvider implements OrangeColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.orange";

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
            static::COLOR_50   => static::ORANGE_COLOR_50,
            static::COLOR_100  => static::ORANGE_COLOR_100,
            static::COLOR_200  => static::ORANGE_COLOR_200,
            static::COLOR_300  => static::ORANGE_COLOR_300,
            static::COLOR_400  => static::ORANGE_COLOR_400,
            static::COLOR_500  => static::ORANGE_COLOR_500,
            static::COLOR_600  => static::ORANGE_COLOR_600,
            static::COLOR_700  => static::ORANGE_COLOR_700,
            static::COLOR_A100 => static::ORANGE_COLOR_A100,
            static::COLOR_A200 => static::ORANGE_COLOR_A200,
            static::COLOR_A400 => static::ORANGE_COLOR_A400,
            static::COLOR_A700 => static::ORANGE_COLOR_A700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return static::ORANGE_COLOR_NAME;
    }
}
