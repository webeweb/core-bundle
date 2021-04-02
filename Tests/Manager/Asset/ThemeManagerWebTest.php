<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager\Asset;

use WBW\Bundle\CoreBundle\Manager\Asset\ThemeManager;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\FooterThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\NotificationsDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\SearchThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\TasksDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\UserInfoThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Theme manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
 */
class ThemeManagerWebTest extends AbstractWebTestCase {

    /**
     * Tests the dependency injection.
     *
     * @return void
     */
    public function testDependencyInjection(): void {

        $obj = static::$kernel->getContainer()->get(ThemeManager::SERVICE_NAME);

        $this->assertInstanceOf(ApplicationThemeProviderInterface::class, $obj->getApplicationThemeProvider());
        $this->assertInstanceOf(BreadcrumbsThemeProviderInterface::class, $obj->getBreadcrumbsThemeProvider());
        $this->assertInstanceOf(FooterThemeProviderInterface::class, $obj->getFooterThemeProvider());
        $this->assertInstanceOf(HookDropDownThemeProviderInterface::class, $obj->getHookDropDownThemeProvider());
        $this->assertInstanceOf(NotificationsDropDownThemeProviderInterface::class, $obj->getNotificationsDropDownThemeProvider());
        $this->assertInstanceOf(SearchThemeProviderInterface::class, $obj->getSearchThemeProvider());
        $this->assertInstanceOf(TasksDropDownThemeProviderInterface::class, $obj->getTasksDropDownThemeProvider());
        $this->assertInstanceOf(UserInfoThemeProviderInterface::class, $obj->getUserInfoThemeProvider());
    }
}
