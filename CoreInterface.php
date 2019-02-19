<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle;

/**
 * Core interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle
 */
interface CoreInterface {

    /**
     * Core "danger".
     *
     * @var string
     */
    const CORE_DANGER = "danger";

    /**
     * Core "info".
     *
     * @var string
     */
    const CORE_INFO = "info";

    /**
     * Core "success".
     *
     * @var string
     */
    const CORE_SUCCESS = "success";

    /**
     * Core "warning".
     *
     * @var string
     */
    const CORE_WARNING = "warning";
}
