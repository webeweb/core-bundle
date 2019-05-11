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

use WBW\Bundle\CoreBundle\Notification\NotificationInterface;

/**
 * Notification events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 */
class NotificationEvents {

    /**
     * Notification "danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = "wbw.core.event.notification." . NotificationInterface::NOTIFICATION_DANGER;

    /**
     * Notification "info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = "wbw.core.event.notification." . NotificationInterface::NOTIFICATION_INFO;

    /**
     * Notification "success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = "wbw.core.event.notification." . NotificationInterface::NOTIFICATION_SUCCESS;

    /**
     * Notification "warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = "wbw.core.event.notification." . NotificationInterface::NOTIFICATION_WARNING;
}
