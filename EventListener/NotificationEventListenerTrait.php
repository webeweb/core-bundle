<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

/**
 * Notification event listener trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
trait NotificationEventListenerTrait {

    /**
     * Notification event listener.
     *
     * @var NotificationEventListener
     */
    private $notificationEventListener;

    /**
     * Get the Notification event listener.
     *
     * @return NotificationEventListener Returns the notification event listener.
     */
    public function getNotificationEventListener() {
        return $this->notificationEventListener;
    }

    /**
     * Set the notification event listener.
     *
     * @param NotificationEventListener $notificationEventListener The notification event listener.
     */
    protected function setNotificationEventListener(NotificationEventListener $notificationEventListener = null) {
        $this->notificationEventListener = $notificationEventListener;
        return $this;
    }

}
