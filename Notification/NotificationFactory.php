<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Notification;

/**
 * Notification factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Notification
 */
class NotificationFactory {

    /**
     * Create a danger notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the danger notification.
     */
    public static function newDangerNotification($content) {
        return new DangerNotification($content);
    }

    /**
     * Create a default notification.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return NotificationInterface Returns the default notification.
     */
    public static function newDefaultNotification($content, $type) {
        return new DefaultNotification($type, $content);
    }

    /**
     * Create a info notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the info notification.
     */
    public static function newInfoNotification($content) {
        return new InfoNotification($content);
    }

    /**
     * Create a success notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the success notification.
     */
    public static function newSuccessNotification($content) {
        return new SuccessNotification($content);
    }

    /**
     * Create a warning notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the warning notification.
     */
    public static function newWarningNotification($content) {
        return new WarningNotification($content);
    }

}
