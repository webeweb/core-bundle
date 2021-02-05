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
use WBW\Bundle\CoreBundle\Provider\Color\IndigoColorProviderInterface;

/**
 * Indigo color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class IndigoColorProvider extends AbstractColorProvider implements IndigoColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.indigo";

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
            static::COLOR_50   => static::INDIGO_COLOR_50,
            static::COLOR_100  => static::INDIGO_COLOR_100,
            static::COLOR_200  => static::INDIGO_COLOR_200,
            static::COLOR_300  => static::INDIGO_COLOR_300,
            static::COLOR_400  => static::INDIGO_COLOR_400,
            static::COLOR_500  => static::INDIGO_COLOR_500,
            static::COLOR_600  => static::INDIGO_COLOR_600,
            static::COLOR_700  => static::INDIGO_COLOR_700,
            static::COLOR_A100 => static::INDIGO_COLOR_A100,
            static::COLOR_A200 => static::INDIGO_COLOR_A200,
            static::COLOR_A400 => static::INDIGO_COLOR_A400,
            static::COLOR_A700 => static::INDIGO_COLOR_A700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return static::INDIGO_COLOR_NAME;
    }
}
