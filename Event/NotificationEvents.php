<?php

/**
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
     * Notification "Danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = "webeweb.core.event.notification." . NotificationInterface::NOTIFICATION_DANGER;

    /**
     * Notification "Info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = "webeweb.core.event.notification." . NotificationInterface::NOTIFICATION_INFO;

    /**
     * Notification "Success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = "webeweb.core.event.notification." . NotificationInterface::NOTIFICATION_SUCCESS;

    /**
     * Notification "Warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = "webeweb.core.event.notification." . NotificationInterface::NOTIFICATION_WARNING;

}
