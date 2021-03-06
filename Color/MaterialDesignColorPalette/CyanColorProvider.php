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
use WBW\Bundle\CoreBundle\Provider\Color\CyanColorProviderInterface;

/**
 * Cyan color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
class CyanColorProvider extends AbstractColorProvider implements CyanColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.color.cyan";

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
            self::COLOR_50   => self::CYAN_COLOR_50,
            self::COLOR_100  => self::CYAN_COLOR_100,
            self::COLOR_200  => self::CYAN_COLOR_200,
            self::COLOR_300  => self::CYAN_COLOR_300,
            self::COLOR_400  => self::CYAN_COLOR_400,
            self::COLOR_500  => self::CYAN_COLOR_500,
            self::COLOR_600  => self::CYAN_COLOR_600,
            self::COLOR_700  => self::CYAN_COLOR_700,
            self::COLOR_A100 => self::CYAN_COLOR_A100,
            self::COLOR_A200 => self::CYAN_COLOR_A200,
            self::COLOR_A400 => self::CYAN_COLOR_A400,
            self::COLOR_A700 => self::CYAN_COLOR_A700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return self::CYAN_COLOR_NAME;
    }
}
