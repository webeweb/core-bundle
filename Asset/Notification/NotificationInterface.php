<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Notification;

use WBW\Bundle\CoreBundle\WBWCoreInterface;

/**
 * Notification interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Notification
 */
interface NotificationInterface {

    /**
     * Notification "danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = WBWCoreInterface::CORE_DANGER;

    /**
     * Notification "info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = WBWCoreInterface::CORE_INFO;

    /**
     * Notification "success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = WBWCoreInterface::CORE_SUCCESS;

    /**
     * Notification "warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = WBWCoreInterface::CORE_WARNING;

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
