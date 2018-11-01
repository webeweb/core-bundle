<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Provider\ProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestManager;

/**
 * Abstract manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class AbstractManagerTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestManager();

        $this->assertCount(0, $obj->getProviders());
    }

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
        $this->assertCount(1, $obj->getProviders());
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
     * Tests the registerProvider() method.
     *
     * @return void
     */
    public function testRegisterProvider() {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager();

        $obj->registerProvider($provider);
        $this->assertCount(1, $obj->getProviders());
    }

}
