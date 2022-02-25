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

use Exception;
use WBW\Bundle\CoreBundle\Provider\Asset\ThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset\TestThemeManager;

/**
 * Abstract theme manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
 */
class AbstractThemeManagerTest extends AbstractTestCase {

    /**
     * Tests addGlobal()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddGlobal(): void {

        // Set a Theme provider mock.
        $provider = $this->getMockBuilder(ThemeProviderInterface::class)->getMock();

        $obj = new TestThemeManager($this->logger, $this->twigEnvironment);
        $obj->setProvider(ThemeProviderInterface::class, $provider);

        $obj->addGlobal();

        $res = $this->twigEnvironment->getGlobals();
        $this->assertCount(1, $res);

        $this->assertArrayHasKey("ThemeProvider", $res);
        $this->assertInstanceOf(ThemeProviderInterface::class, $res["ThemeProvider"]);
    }

    /**
     * Tests addGlobal()
     *
     * @return void
     */
    public function testAddGlobalWithNull(): void {

        $obj = new TestThemeManager($this->logger, $this->twigEnvironment);

        $obj->addGlobal();

        $res = $this->twigEnvironment->getGlobals();
        $this->assertCount(0, $res);
    }

    /**
     * Tests setProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetProvider(): void {

        // Set a Theme provider mock.
        $provider = $this->getMockBuilder(ThemeProviderInterface::class)->getMock();

        $obj = new TestThemeManager($this->logger, $this->twigEnvironment);

        $obj->setProvider(ThemeProviderInterface::class, $provider);
        $this->assertSame($provider, $obj->getProvider(ThemeProviderInterface::class));
    }

    /**
     * Tests setProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetProviderWithOverwrite(): void {

        // Set a Theme provider mock.
        $provider1 = $this->getMockBuilder(ThemeProviderInterface::class)->getMock();
        $provider2 = $this->getMockBuilder(ThemeProviderInterface::class)->getMock();

        $obj = new TestThemeManager($this->logger, $this->twigEnvironment);

        $obj->setProvider(ThemeProviderInterface::class, $provider1);
        $this->assertSame($provider1, $obj->getProvider(ThemeProviderInterface::class));

        $obj->setProvider(ThemeProviderInterface::class, $provider2);
        $this->assertSame($provider2, $obj->getProvider(ThemeProviderInterface::class));
    }

    /**
     * Tests __construct()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new TestThemeManager($this->logger, $this->twigEnvironment);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertNull($obj->getProvider(ThemeProviderInterface::class));
        $this->assertCount(0, $obj->getProviders());

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
