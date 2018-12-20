<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

/**
 * NotificationsDropDown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait NotificationsDropDownThemeProviderTrait {

    /**
     * Notifications drop down theme provider.
     *
     * @var NotificationsDropDownThemeProviderInterface
     */
    private $notificationsDropDownThemeProvider;

    /**
     * Get the notifications drop down theme provider.
     *
     * @return NotificationsDropDownThemeProviderInterface Returns the notifications drop down theme provider.
     */
    public function getNotificationsDropDownThemeProvider() {
        return $this->notificationsDropDownThemeProvider;
    }

    /**
     * Set the notifications drop down theme provider.
     *
     * @param NotificationsDropDownThemeProviderInterface $notificationsDropDownThemeProvider The notifications drop down theme provider.
     */
    protected function setNotificationsDropDownThemeProvider(NotificationsDropDownThemeProviderInterface $notificationsDropDownThemeProvider = null) {
        $this->notificationsDropDownThemeProvider = $notificationsDropDownThemeProvider;
        return $this;
    }

}
