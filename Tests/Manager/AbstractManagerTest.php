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

use WBW\Bundle\CoreBundle\Provider\ProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestManager;

/**
 * Abstract manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class AbstractManagerTest extends AbstractTestCase {

    /**
     * Tests the addProvider() method.
     *
     * @return void
     */
    public function testAddProvider() {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager();

        $obj->addProvider($provider);
        $this->assertSame($provider, $obj->getProviders()[0]);
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestManager();

        $this->assertEquals([], $obj->getProviders());
        $this->assertEquals(0, $obj->size());
    }

    /**
     * Tests the hasProviders() method.
     *
     * @return void
     */
    public function testHasProviders() {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager();

        $this->assertFalse($obj->hasProviders());

        $obj->addProvider($provider);
        $this->assertTrue($obj->hasProviders());
    }

    /**
     * Tests the removeProvider() method.
     *
     * @return void
     */
    public function testRemoveProvider() {

        // Set a Provider mocks.
        $provider1 = $this->getMockBuilder(ProviderInterface::class)->getMock();
        $provider2 = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager();

        $obj->addProvider($provider1);
        $this->assertEquals(1, $obj->size());

        $obj->addProvider($provider2);
        $this->assertEquals(2, $obj->size());

        $obj->removeProvider($provider1);
        $this->assertEquals(1, $obj->size());
    }

}
