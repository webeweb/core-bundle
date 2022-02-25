<?php

/*
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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait NotificationsDropDownThemeProviderTrait {

    /**
     * Notifications drop down theme provider.
     *
     * @var NotificationsDropDownThemeProviderInterface|null
     */
    private $notificationsDropDownThemeProvider;

    /**
     * Get the notifications drop down theme provider.
     *
     * @return NotificationsDropDownThemeProviderInterface|null Returns the notifications drop down theme provider.
     */
    public function getNotificationsDropDownThemeProvider(): ?NotificationsDropDownThemeProviderInterface {
        return $this->notificationsDropDownThemeProvider;
    }

    /**
     * Set the notifications drop down theme provider.
     *
     * @param NotificationsDropDownThemeProviderInterface|null $notificationsDropDownThemeProvider The notifications drop down theme provider.
     * @return self Returns this instance.
     */
    protected function setNotificationsDropDownThemeProvider(?NotificationsDropDownThemeProviderInterface $notificationsDropDownThemeProvider): self {
        $this->notificationsDropDownThemeProvider = $notificationsDropDownThemeProvider;
        return $this;
    }
}
