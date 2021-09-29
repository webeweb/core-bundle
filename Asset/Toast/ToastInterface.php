<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Toast;

use WBW\Bundle\CoreBundle\WBWCoreInterface;

/**
 * Toast interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Toast
 */
interface ToastInterface {

    /**
     * Toast "danger".
     *
     * @var string
     */
    const TOAST_DANGER = WBWCoreInterface::CORE_DANGER;

    /**
     * Toast "info".
     *
     * @var string
     */
    const TOAST_INFO = WBWCoreInterface::CORE_INFO;

    /**
     * Toast "success".
     *
     * @var string
     */
    const TOAST_SUCCESS = WBWCoreInterface::CORE_SUCCESS;

    /**
     * Toast "warning".
     *
     * @var string
     */
    const TOAST_WARNING = WBWCoreInterface::CORE_WARNING;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent(): string;

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType(): string;
}
