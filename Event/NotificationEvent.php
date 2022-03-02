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

use WBW\Library\Symfony\Assets\Notification\NotificationInterface;
use WBW\Library\Symfony\Assets\Notification\NotificationTrait;

/**
 * Notification event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 */
class NotificationEvent extends AbstractEvent {

    use NotificationTrait;

    /**
     * Event "danger".
     *
     * @var string
     */
    const DANGER = "wbw.core.event.notification.danger";

    /**
     * Event "info".
     *
     * @var string
     */
    const INFO = "wbw.core.event.notification.info";

    /**
     * Event "success".
     *
     * @var string
     */
    const SUCCESS = "wbw.core.event.notification.success";

    /**
     * Event "warning".
     *
     * @var string
     */
    const WARNING = "wbw.core.event.notification.warning";

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     * @param NotificationInterface $notification The notification.
     */
    public function __construct(string $eventName, NotificationInterface $notification) {
        parent::__construct($eventName);

        $this->setNotification($notification);
    }
}
