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

use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;

/**
 * Notification event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 */
class NotificationEvent extends AbstractEvent {

    /**
     * Notification.
     *
     * @var NotificationInterface
     */
    private $notification;

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

    /**
     * Get the notification.
     *
     * @return NotificationInterface Returns the notification.
     */
    public function getNotification(): NotificationInterface {
        return $this->notification;
    }

    /**
     * Set the notification.
     *
     * @param NotificationInterface $notification The notification.
     * @return NotificationEvent Returns this notification event.
     */
    protected function setNotification(NotificationInterface $notification): NotificationEvent {
        $this->notification = $notification;
        return $this;
    }
}
