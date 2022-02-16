<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager\Asset;

use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Manager\Asset\ColorManager;
use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
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
    protected function setUp(): void {
        parent::setUp();

        // Set a Color provider mock.
        $this->colorProvider = new RedColorProvider();
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new ColorManager($this->logger);

        $obj->addProvider($this->colorProvider);
        $this->assertSame($this->colorProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new ColorManager($this->logger);
        $obj->addProvider($this->colorProvider);

        try {

            $obj->addProvider($this->colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }

    /**
     * Tests contains()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testContains(): void {

        $obj = new ColorManager($this->logger);

        $this->assertFalse($obj->contains($this->colorProvider));

        $obj->addProvider($this->colorProvider);
        $this->assertTrue($obj->contains($this->colorProvider));
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Quote provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();

        $obj = new ColorManager($this->logger);

        try {

            $obj->contains($quoteProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements ColorProviderInterface", $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.asset.color", ColorManager::SERVICE_NAME);

        $obj = new ColorManager($this->logger);

        $this->assertEquals([], $obj->getProviders());
    }
}
