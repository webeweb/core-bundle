<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * White color provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Provider\Color
 */
interface WhiteColorProviderInterface extends ColorProviderInterface {

    /**
     * White color "500"
     *
     * @var string
     */
    const WHITE_COLOR_500 = "#FFFFFF";

    /**
     * White color name.
     *
     * @var string
     */
    const WHITE_COLOR_NAME = "white";
}
