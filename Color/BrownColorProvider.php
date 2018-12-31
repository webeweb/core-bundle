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

use WBW\Bundle\CoreBundle\Provider\Color\BrownColorProviderInterface;

/**
 * Brown color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
class BrownColorProvider implements BrownColorProviderInterface, ColorInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.color.brown";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getColors() {
        return [
            self::COLOR_50  => self::COLOR_BROWN_50,
            self::COLOR_100 => self::COLOR_BROWN_100,
            self::COLOR_200 => self::COLOR_BROWN_200,
            self::COLOR_300 => self::COLOR_BROWN_300,
            self::COLOR_400 => self::COLOR_BROWN_400,
            self::COLOR_500 => self::COLOR_BROWN_500,
            self::COLOR_600 => self::COLOR_BROWN_600,
            self::COLOR_700 => self::COLOR_BROWN_700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return self::COLOR_BROWN;
    }

}
