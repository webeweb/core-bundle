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
use WBW\Bundle\CoreBundle\Provider\Color\BlueGreyColorProviderInterface;

/**
 * Blue  grey color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class BlueGreyColorProvider extends AbstractColorProvider implements BlueGreyColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.blue_grey";

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
            static::COLOR_50  => static::BLUE_GREY_COLOR_50,
            static::COLOR_100 => static::BLUE_GREY_COLOR_100,
            static::COLOR_200 => static::BLUE_GREY_COLOR_200,
            static::COLOR_300 => static::BLUE_GREY_COLOR_300,
            static::COLOR_400 => static::BLUE_GREY_COLOR_400,
            static::COLOR_500 => static::BLUE_GREY_COLOR_500,
            static::COLOR_600 => static::BLUE_GREY_COLOR_600,
            static::COLOR_700 => static::BLUE_GREY_COLOR_700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return static::BLUE_GREY_COLOR_NAME;
    }
}
