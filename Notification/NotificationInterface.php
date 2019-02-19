<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Notification;

use WBW\Bundle\CoreBundle\CoreInterface;

/**
 * Notification interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Notification
 */
interface NotificationInterface {

    /**
     * Notification "Danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = CoreInterface::CORE_DANGER;

    /**
     * Notification "Info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = CoreInterface::CORE_INFO;

    /**
     * Notification "Success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = CoreInterface::CORE_SUCCESS;

    /**
     * Notification "Warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = CoreInterface::CORE_WARNING;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType();
}
