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

use Exception;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\NotificationsDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\TasksDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Theme\UserInfoThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Theme manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class ThemeManagerTest extends AbstractTestCase {

    /**
     * Tests the addGlobal() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddGlobal(): void {

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        // Set the Theme provider mocks.
        $obj->setApplicationThemeProvider($this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock());
        $obj->setBreadcrumbsThemeProvider($this->getMockBuilder(BreadcrumbsThemeProviderInterface::class)->getMock());
        $obj->setHookDropDownThemeProvider($this->getMockBuilder(HookDropDownThemeProviderInterface::class)->getMock());
        $obj->setFooterThemeProvider($this->getMockBuilder(FooterThemeProviderInterface::class)->getMock());
        $obj->setNavigationThemeProvider($this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock());
        $obj->setNotificationsDropDownThemeProvider($this->getMockBuilder(NotificationsDropDownThemeProviderInterface::class)->getMock());
        $obj->setSearchThemeProvider($this->getMockBuilder(SearchThemeProviderInterface::class)->getMock());
        $obj->setTasksDropDownThemeProvider($this->getMockBuilder(TasksDropDownThemeProviderInterface::class)->getMock());
        $obj->setUserInfoThemeProvider($this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock());

        $obj->addGlobal();

        $res = $this->twigEnvironment->getGlobals();
        $this->assertCount(9, $res);

        $this->assertArrayHasKey("ApplicationThemeProvider", $res);
        $this->assertInstanceOf(ApplicationThemeProviderInterface::class, $res["ApplicationThemeProvider"]);

        $this->assertArrayHasKey("BreadcrumbsThemeProvider", $res);
        $this->assertInstanceOf(BreadcrumbsThemeProviderInterface::class, $res["BreadcrumbsThemeProvider"]);

        $this->assertArrayHasKey("FooterThemeProvider", $res);
        $this->assertInstanceOf(FooterThemeProviderInterface::class, $res["FooterThemeProvider"]);

        $this->assertArrayHasKey("HookDropDownThemeProvider", $res);
        $this->assertInstanceOf(HookDropDownThemeProviderInterface::class, $res["HookDropDownThemeProvider"]);

        $this->assertArrayHasKey("NavigationThemeProvider", $res);
        $this->assertInstanceOf(NavigationThemeProviderInterface::class, $res["NavigationThemeProvider"]);

        $this->assertArrayHasKey("NotificationsDropDownThemeProvider", $res);
        $this->assertInstanceOf(NotificationsDropDownThemeProviderInterface::class, $res["NotificationsDropDownThemeProvider"]);

        $this->assertArrayHasKey("TasksDropDownThemeProvider", $res);
        $this->assertInstanceOf(TasksDropDownThemeProviderInterface::class, $res["TasksDropDownThemeProvider"]);

        $this->assertArrayHasKey("SearchThemeProvider", $res);
        $this->assertInstanceOf(SearchThemeProviderInterface::class, $res["SearchThemeProvider"]);

        $this->assertArrayHasKey("UserInfoThemeProvider", $res);
        $this->assertInstanceOf(UserInfoThemeProviderInterface::class, $res["UserInfoThemeProvider"]);
    }

    /**
     * Tests the hasProviders() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHasProviders(): void {

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $this->assertFalse($obj->hasProviders());

        $obj->setApplicationThemeProvider($this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock());
        $this->assertTrue($obj->hasProviders());
    }

    /**
     * Tests the setApplicationThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetApplicationThemeProvider(): void {

        // Set a Application theme provider mock.
        $provider = $this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setApplicationThemeProvider($this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock());
        $this->assertNotSame($provider, $obj->getApplicationThemeProvider());

        $obj->setApplicationThemeProvider($provider);
        $this->assertSame($provider, $obj->getApplicationThemeProvider());
    }

    /**
     * Tests the setBreadcrumbsThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBreadcrumbsThemeProvider(): void {

        // Set a Breadcrumbs theme provider mock.
        $provider = $this->getMockBuilder(BreadcrumbsThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setBreadcrumbsThemeProvider($provider);
        $this->assertSame($provider, $obj->getBreadcrumbsThemeProvider());
    }

    /**
     * Tests the setFooterThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFooterThemeProvider(): void {

        // Set a Footer theme provider mock.
        $provider = $this->getMockBuilder(FooterThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setFooterThemeProvider($provider);
        $this->assertSame($provider, $obj->getFooterThemeProvider());
    }

    /**
     * Tests the setHookDropDownThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHookDropDownThemeProvider(): void {

        // Set a Hook drop down theme provider mock.
        $provider = $this->getMockBuilder(HookDropDownThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setHookDropDownThemeProvider($provider);
        $this->assertSame($provider, $obj->getHookDropDownThemeProvider());
    }

    /**
     * Tests the setNavigationThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetNavigationThemeProvider(): void {

        // Set a Navigation theme provider mock.
        $provider = $this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setNavigationThemeProvider($provider);
        $this->assertSame($provider, $obj->getNavigationThemeProvider());
    }

    /**
     * Tests the setNotificationsDropDownThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetNotificationsDropDownThemeProvider(): void {

        // Set a Notifications drop down theme provider mock.
        $provider = $this->getMockBuilder(NotificationsDropDownThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setNotificationsDropDownThemeProvider($provider);
        $this->assertSame($provider, $obj->getNotificationsDropDownThemeProvider());
    }

    /**
     * Tests the setSearchThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSearchThemeProvider(): void {

        // Set a Search theme provider mock.
        $provider = $this->getMockBuilder(SearchThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setSearchThemeProvider($provider);
        $this->assertSame($provider, $obj->getSearchThemeProvider());
    }

    /**
     * Tests the setTasksDropDownThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTasksDropDownThemeProvider(): void {

        // Set a Tasks drop down theme provider mock.
        $provider = $this->getMockBuilder(TasksDropDownThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setTasksDropDownThemeProvider($provider);
        $this->assertSame($provider, $obj->getTasksDropDownThemeProvider());
    }

    /**
     * Tests the setUserInfoThemeProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetUserInfoThemeProvider(): void {

        // Set the mocks.
        $provider = $this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj->setUserInfoThemeProvider($provider);
        $this->assertSame($provider, $obj->getUserInfoThemeProvider());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.theme", ThemeManager::SERVICE_NAME);

        $obj = new ThemeManager($this->logger, $this->twigEnvironment);

        $this->assertNull($obj->getApplicationThemeProvider());
        $this->assertNull($obj->getBreadcrumbsThemeProvider());
        $this->assertNull($obj->getFooterThemeProvider());
        $this->assertNull($obj->getHookDropDownThemeProvider());
        $this->assertNull($obj->getNavigationThemeProvider());
        $this->assertNull($obj->getNotificationsDropDownThemeProvider());
        $this->assertNull($obj->getSearchThemeProvider());
        $this->assertNull($obj->getTasksDropDownThemeProvider());
        $this->assertNull($obj->getUserInfoThemeProvider());
    }
}
