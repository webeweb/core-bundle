<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;
use WBW\Library\Symfony\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\FooterThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\HookDropdownThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\NotificationsDropdownThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\SearchThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\TasksDropdownThemeProviderInterface;
use WBW\Library\Symfony\Provider\Theme\UserInfoThemeProviderInterface;

/**
 * Theme manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class ThemeManagerWebTest extends AbstractWebTestCase {

    /**
     * Tests the dependency injection.
     *
     * @return void
     */
    public function testDependencyInjection(): void {

        $obj = static::$kernel->getContainer()->get(ThemeManager::SERVICE_NAME . ".alias");

        $this->assertInstanceOf(ApplicationThemeProviderInterface::class, $obj->getApplicationThemeProvider());
        $this->assertInstanceOf(BreadcrumbsThemeProviderInterface::class, $obj->getBreadcrumbsThemeProvider());
        $this->assertInstanceOf(FooterThemeProviderInterface::class, $obj->getFooterThemeProvider());
        $this->assertInstanceOf(HookDropdownThemeProviderInterface::class, $obj->getHookDropdownThemeProvider());
        $this->assertInstanceOf(NotificationsDropdownThemeProviderInterface::class, $obj->getNotificationsDropdownThemeProvider());
        $this->assertInstanceOf(SearchThemeProviderInterface::class, $obj->getSearchThemeProvider());
        $this->assertInstanceOf(TasksDropdownThemeProviderInterface::class, $obj->getTasksDropdownThemeProvider());
        $this->assertInstanceOf(UserInfoThemeProviderInterface::class, $obj->getUserInfoThemeProvider());
    }
}
