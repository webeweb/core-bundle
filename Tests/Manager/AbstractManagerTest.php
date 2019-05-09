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
     * Provider.
     *
     * @var ProviderInterface
     */
    private $provider;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Color provider mock.
        $this->provider = $this->getMockBuilder(ProviderInterface::class)->getMock();
    }
    /**
     * Tests the addProvider() method.
     *
     * @return void
     */
    public function testAddProvider() {

        $obj = new TestManager();

        $obj->addProvider($this->provider);
        $this->assertSame($this->provider, $obj->getProviders()[0]);
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
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContains() {

        $obj = new TestManager();

        $this->assertFalse($obj->contains($this->provider));

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->contains($this->provider));
    }

    /**
     * Tests the hasProviders() method.
     *
     * @return void
     */
    public function testHasProviders() {

        $obj = new TestManager();

        $this->assertFalse($obj->hasProviders());

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->hasProviders());
    }

    /**
     * Tests the indexOf() method.
     *
     * @return void
     */
    public function testIndexOf() {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager();

        $obj->addProvider($provider);
        $this->assertEquals(-1, $obj->indexOf($this->provider));

        $obj->addProvider($this->provider);
        $this->assertEquals(1, $obj->indexOf($this->provider));
    }
}
