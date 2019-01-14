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

use WBW\Bundle\CoreBundle\Provider\Color\GreyColorProviderInterface;

/**
 * Grey color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class GreyColorProvider extends AbstractColorProvider implements GreyColorProviderInterface, ColorInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.color.grey";

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
            self::COLOR_50  => self::GREY_COLOR_50,
            self::COLOR_100 => self::GREY_COLOR_100,
            self::COLOR_200 => self::GREY_COLOR_200,
            self::COLOR_300 => self::GREY_COLOR_300,
            self::COLOR_400 => self::GREY_COLOR_400,
            self::COLOR_500 => self::GREY_COLOR_500,
            self::COLOR_600 => self::GREY_COLOR_600,
            self::COLOR_700 => self::GREY_COLOR_700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::GREY_COLOR_NAME;
    }
}
