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
use InvalidArgumentException;
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
     * Color provider.
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
     * Tests the addProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider() {

        $obj = new ColorManager();

        $obj->addProvider($this->colorProvider);
        $this->assertSame($this->colorProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests the addProvider() method.
     *
     * @return void
     */
    public function testAddProviderWithAlreadyRegisteredException() {

        $obj = new ColorManager();

        try {

            $obj->addProvider($this->colorProvider);
            $obj->addProvider($this->colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testContains() {

        $obj = new ColorManager();

        $this->assertFalse($obj->contains($this->colorProvider));

        $obj->addProvider($this->colorProvider);
        $this->assertTrue($obj->contains($this->colorProvider));

        $this->assertFalse($obj->contains(new PinkColorProvider()));
    }

    /**
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException() {

        // Set a Quote provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();

        $obj = new ColorManager();

        try {

            $obj->contains($quoteProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements ColorProviderInterface", $ex->getMessage());
        }
    }
}
