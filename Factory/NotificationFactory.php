<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Factory;

use WBW\Bundle\CoreBundle\Notification\DangerNotification;
use WBW\Bundle\CoreBundle\Notification\DefaultNotification;
use WBW\Bundle\CoreBundle\Notification\InfoNotification;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Notification\SuccessNotification;
use WBW\Bundle\CoreBundle\Notification\WarningNotification;

/**
 * Notification factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Factory
 * @deprecated since Core bundle 1.6, use {@see WBW\Bundle\CoreBundle\Notification\NotificationFactory} instead.
 */
class NotificationFactory {

    /**
     * Creates a danger notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the danger notification.
     */
    public static function newDangerNotification($content) {
        return new DangerNotification($content);
    }

    /**
     * Creates a default notification.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return NotificationInterface Returns the default notification.
     */
    public static function newDefaultNotification($content, $type) {
        return new DefaultNotification($type, $content);
    }

    /**
     * Creates a info notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the info notification.
     */
    public static function newInfoNotification($content) {
        return new InfoNotification($content);
    }

    /**
     * Creates a success notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the success notification.
     */
    public static function newSuccessNotification($content) {
        return new SuccessNotification($content);
    }

    /**
     * Creates a warning notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the warning notification.
     */
    public static function newWarningNotification($content) {
        return new WarningNotification($content);
    }
}
