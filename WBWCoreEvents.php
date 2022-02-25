<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle;

/**
 * Core events.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle
 */
class WBWCoreEvents {

    /**
     * Notification "danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = "wbw.core.event.notification.danger";

    /**
     * Notification "info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = "wbw.core.event.notification.info";

    /**
     * Notification "success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = "wbw.core.event.notification.success";

    /**
     * Notification "warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = "wbw.core.event.notification.warning";

    /**
     * Toast "danger".
     *
     * @var string
     */
    const TOAST_DANGER = "wbw.core.event.toast.danger";

    /**
     * Toast "info".
     *
     * @var string
     */
    const TOAST_INFO = "wbw.core.event.toast.info";

    /**
     * Toast "success".
     *
     * @var string
     */
    const TOAST_SUCCESS = "wbw.core.event.toast.success";

    /**
     * Toast "warning".
     *
     * @var string
     */
    const TOAST_WARNING = "wbw.core.event.toast.warning";
}
