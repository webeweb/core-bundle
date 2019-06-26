<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use WBW\Bundle\CoreBundle\WBWCoreEvents;

/**
 * Notification events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 * @deprecated since 2.7.0 use "WBW\Bundle\CoreBundle\WBWCoreEvents" instead.
 */
class NotificationEvents {

    /**
     * Notification "danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = WBWCoreEvents::NOTIFICATION_DANGER;

    /**
     * Notification "info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = WBWCoreEvents::NOTIFICATION_INFO;

    /**
     * Notification "success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = WBWCoreEvents::NOTIFICATION_SUCCESS;

    /**
     * Notification "warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = WBWCoreEvents::NOTIFICATION_WARNING;
}
