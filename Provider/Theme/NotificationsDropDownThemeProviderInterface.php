<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\Asset\ThemeProviderInterface;

/**
 * Notifications drop down theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
interface NotificationsDropDownThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.theme.notifications_drop_down";

    /**
     * Get the notifications.
     *
     * @return array Returns the notifications.
     */
    public function getNotifications(): array;
}
