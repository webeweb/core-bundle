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
use WBW\Bundle\CoreBundle\Provider\Color\WhiteColorProviderInterface;

/**
 * White color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class WhiteColorProvider extends AbstractColorProvider implements WhiteColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.white";

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
            static::COLOR_50   => static::WHITE_COLOR_500,
            static::COLOR_100  => static::WHITE_COLOR_500,
            static::COLOR_200  => static::WHITE_COLOR_500,
            static::COLOR_300  => static::WHITE_COLOR_500,
            static::COLOR_400  => static::WHITE_COLOR_500,
            static::COLOR_500  => static::WHITE_COLOR_500,
            static::COLOR_600  => static::WHITE_COLOR_500,
            static::COLOR_700  => static::WHITE_COLOR_500,
            static::COLOR_A100 => static::WHITE_COLOR_500,
            static::COLOR_A200 => static::WHITE_COLOR_500,
            static::COLOR_A400 => static::WHITE_COLOR_500,
            static::COLOR_A700 => static::WHITE_COLOR_500,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return static::WHITE_COLOR_NAME;
    }
}
