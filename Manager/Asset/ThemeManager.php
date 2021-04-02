<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager\Asset;

use WBW\Bundle\CoreBundle\Manager\ManagerInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\NotificationsDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\TasksDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\UserInfoThemeProviderInterface;

/**
 * Theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager\Asset
 */
class ThemeManager extends AbstractThemeManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.manager.theme";

    /**
     * Get the application theme provider.
     *
     * @return ApplicationThemeProviderInterface|null Returns the application theme provider.
     */
    public function getApplicationThemeProvider(): ?ApplicationThemeProviderInterface {
        return $this->getProvider(ApplicationThemeProviderInterface::class);
    }

    /**
     * Get the breadcrumbs theme provider.
     *
     * @return BreadcrumbsThemeProviderInterface|null Returns the breadcrumbs theme provider.
     */
    public function getBreadcrumbsThemeProvider(): ?BreadcrumbsThemeProviderInterface {
        return $this->getProvider(BreadcrumbsThemeProviderInterface::class);
    }

    /**
     * Get the footer theme provider.
     *
     * @return FooterThemeProviderInterface|null Returns the footer theme provider.
     */
    public function getFooterThemeProvider(): ?FooterThemeProviderInterface {
        return $this->getProvider(FooterThemeProviderInterface::class);
    }

    /**
     * Get the hook drop down theme provider.
     *
     * @return HookDropDownThemeProviderInterface|null Returns the hook drop down theme provider.
     */
    public function getHookDropDownThemeProvider(): ?HookDropDownThemeProviderInterface {
        return $this->getProvider(HookDropDownThemeProviderInterface::class);
    }

    /**
     * Get the navigation theme provider.
     *
     * @return NavigationThemeProviderInterface|null Returns the navigation theme provider.
     */
    public function getNavigationThemeProvider(): ?NavigationThemeProviderInterface {
        return $this->getProvider(NavigationThemeProviderInterface::class);
    }

    /**
     * Get the notifications drop down theme provider.
     *
     * @return NotificationsDropDownThemeProviderInterface|null Returns the Notifications drop down theme provider.
     */
    public function getNotificationsDropDownThemeProvider(): ?NotificationsDropDownThemeProviderInterface {
        return $this->getProvider(NotificationsDropDownThemeProviderInterface::class);
    }

    /**
     * Get the search theme provider.
     *
     * @return SearchThemeProviderInterface|null Returns the search theme provider.
     */
    public function getSearchThemeProvider(): ?SearchThemeProviderInterface {
        return $this->getProvider(SearchThemeProviderInterface::class);
    }

    /**
     * Get the tasks drop down theme provider.
     *
     * @return TasksDropDownThemeProviderInterface|null Returns the tasks drop down theme provider.
     */
    public function getTasksDropDownThemeProvider(): ?TasksDropDownThemeProviderInterface {
        return $this->getProvider(TasksDropDownThemeProviderInterface::class);
    }

    /**
     * Get the user info theme provider.
     *
     * @return UserInfoThemeProviderInterface|null Returns the user info theme provider.
     */
    public function getUserInfoThemeProvider(): ?UserInfoThemeProviderInterface {
        return $this->getProvider(UserInfoThemeProviderInterface::class);
    }

    /**
     * {@inheritDoc}
     */
    protected function initIndex(): array {
        return [
            ApplicationThemeProviderInterface::class           => null,
            BreadcrumbsThemeProviderInterface::class           => null,
            FooterThemeProviderInterface::class                => null,
            HookDropDownThemeProviderInterface::class          => null,
            NavigationThemeProviderInterface::class            => null,
            NotificationsDropDownThemeProviderInterface::class => null,
            SearchThemeProviderInterface::class                => null,
            TasksDropDownThemeProviderInterface::class         => null,
            UserInfoThemeProviderInterface::class              => null,
        ];
    }

    /**
     * Set the application theme provider.
     *
     * @param ApplicationThemeProviderInterface $provider The application theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setApplicationThemeProvider(ApplicationThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(ApplicationThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the breadcrumbs theme provider.
     *
     * @param BreadcrumbsThemeProviderInterface $provider The breadcrumbs theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setBreadcrumbsThemeProvider(BreadcrumbsThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(BreadcrumbsThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the footer theme provider.
     *
     * @param FooterThemeProviderInterface $provider The footer theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setFooterThemeProvider(FooterThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(FooterThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the hook drop down theme provider.
     *
     * @param HookDropDownThemeProviderInterface $provider The hook drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setHookDropDownThemeProvider(HookDropDownThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(HookDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the navigation theme provider.
     *
     * @param NavigationThemeProviderInterface $provider The navigation theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setNavigationThemeProvider(NavigationThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(NavigationThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the notifications drop down theme provider.
     *
     * @param NotificationsDropDownThemeProviderInterface $provider The notifications drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setNotificationsDropDownThemeProvider(NotificationsDropDownThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(NotificationsDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the search theme provider.
     *
     * @param SearchThemeProviderInterface $provider The search theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setSearchThemeProvider(SearchThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(SearchThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the tasks drop down theme provider.
     *
     * @param TasksDropDownThemeProviderInterface $provider The tasks drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setTasksDropDownThemeProvider(TasksDropDownThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(TasksDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the user info theme provider.
     *
     * @param UserInfoThemeProviderInterface $provider The user info theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setUserInfoThemeProvider(UserInfoThemeProviderInterface $provider): ManagerInterface {
        $this->setProvider(UserInfoThemeProviderInterface::class, $provider);
        return $this;
    }
}
