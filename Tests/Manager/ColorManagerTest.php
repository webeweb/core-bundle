<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use Exception;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class ColorManagerTest extends AbstractTestCase {

    /**
     * Color provider
     *
     * @var ColorProviderInterface
     */
    private $colorProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Color provider mock.
        $this->colorProvider = new RedColorProvider();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.core.manager.color", ColorManager::SERVICE_NAME);

        $obj = new ColorManager();

        $this->assertEquals([], $obj->getProviders());
    }

    /**
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContains() {

        // Set a Color provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();

        $obj = new ColorManager();

        $obj->addProvider(new PinkColorProvider());
        $obj->addProvider($this->colorProvider);
        $this->assertTrue($obj->contains($this->colorProvider));

        $obj->addProvider($quoteProvider);
        $this->assertFalse($obj->contains($quoteProvider));
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRegisterProvider() {

        $obj = new ColorManager();

        $obj->registerProvider($this->colorProvider);
        $this->assertSame($this->colorProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     */
    public function testRegisterProviderWithAlreadyRegisteredException() {

        $obj = new ColorManager();

        try {

            $obj->registerProvider($this->colorProvider);
            $obj->registerProvider($this->colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }
}
