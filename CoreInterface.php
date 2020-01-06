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
 * @deprecated since 2.15.0, use {@see WBW\Bundle\CoreBundle\WBWCoreInterface} instead.
 */
interface CoreInterface {

    /**
     * Core "danger".
     *
     * @var string
     */
    const CORE_DANGER = WBWCoreInterface::CORE_DANGER;

    /**
     * Core "info".
     *
     * @var string
     */
    const CORE_INFO = WBWCoreInterface::CORE_INFO;

    /**
     * Core "success".
     *
     * @var string
     */
    const CORE_SUCCESS = WBWCoreInterface::CORE_SUCCESS;

    /**
     * Core "warning".
     *
     * @var string
     */
    const CORE_WARNING = WBWCoreInterface::CORE_WARNING;
}
