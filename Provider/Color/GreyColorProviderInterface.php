<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Grey color provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Color
 */
interface GreyColorProviderInterface extends ColorProviderInterface {

    /**
     * Grey color.
     *
     * @var string
     */
    const GREY_COLOR = "grey";

    /**
     * Grey color "50"
     *
     * @var string
     */
    const GREY_COLOR_50 = "#FAFAFA";

    /**
     * Grey color "100"
     *
     * @var string
     */
    const GREY_COLOR_100 = "#F5F5F5";

    /**
     * Grey color "200"
     *
     * @var string
     */
    const GREY_COLOR_200 = "#EEEEEE";

    /**
     * Grey color "300"
     *
     * @var string
     */
    const GREY_COLOR_300 = "#E0E0E0";

    /**
     * Grey color "400"
     *
     * @var string
     */
    const GREY_COLOR_400 = "#BDBDBD";

    /**
     * Grey color "500"
     *
     * @var string
     */
    const GREY_COLOR_500 = "#9E9E9E";

    /**
     * Grey color "600"
     *
     * @var string
     */
    const GREY_COLOR_600 = "#757575";

    /**
     * Grey color "700"
     *
     * @var string
     */
    const GREY_COLOR_700 = "#616161";

    /**
     * Grey color "800"
     *
     * @var string
     */
    const GREY_COLOR_800 = "#424242";

    /**
     * Grey color "900"
     *
     * @var string
     */
    const GREY_COLOR_900 = "#212121";

}
