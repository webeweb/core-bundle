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
use WBW\Bundle\CoreBundle\Manager\Asset\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\Asset\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
 */
class QuoteManagerTest extends AbstractTestCase {

    /**
     * Quote provider.
     *
     * @var QuoteProviderInterface
     */
    private $quoteProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Quote provider mock.
        $this->quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
        $this->quoteProvider->expects($this->any())->method("getDomain")->willReturn("domain");
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new QuoteManager($this->logger);

        $obj->addProvider($this->quoteProvider);
        $this->assertSame($this->quoteProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new QuoteManager($this->logger);
        $obj->addProvider($this->quoteProvider);

        try {

            $obj->addProvider($this->quoteProvider);
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

        $obj = new QuoteManager($this->logger);

        $this->assertFalse($obj->contains($this->quoteProvider));

        $obj->addProvider($this->quoteProvider);
        $this->assertTrue($obj->contains($this->quoteProvider));
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Color provider mock.
        $colorProvider = new RedColorProvider();

        $obj = new QuoteManager($this->logger);

        try {

            $obj->contains($colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements QuoteProviderInterface", $ex->getMessage());
        }
    }

    /**
     * Tests getProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetProvider(): void {

        $obj = new QuoteManager($this->logger);
        $obj->addProvider($this->quoteProvider);

        $this->assertSame($this->quoteProvider, $obj->getProvider("domain"));
        $this->assertNull($obj->getProvider("github"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.asset.quote", QuoteManager::SERVICE_NAME);

        $obj = new QuoteManager($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertEquals([], $obj->getProviders());
    }
}
