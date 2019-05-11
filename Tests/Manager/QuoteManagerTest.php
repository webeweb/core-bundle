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
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
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
    protected function setUp() {
        parent::setUp();

        // Set a Quote provider mock.
        $this->quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
        $this->quoteProvider->expects($this->any())->method("getDomain")->willReturn("domain");
    }

    /**
     * Tests the addProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider() {

        $obj = new QuoteManager();

        $obj->addProvider($this->quoteProvider);
        $this->assertSame($this->quoteProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests the addProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException() {

        $obj = new QuoteManager();
        $obj->addProvider($this->quoteProvider);

        try {

            $obj->addProvider($this->quoteProvider);
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

        $this->assertEquals("wbw.core.manager.quote", QuoteManager::SERVICE_NAME);

        $obj = new QuoteManager();

        $this->assertEquals([], $obj->getProviders());
    }

    /**
     * Tests the contains() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testContains() {

        // Set a Quote provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
        $quoteProvider->expects($this->any())->method("getDomain")->willReturn("github");

        $obj = new QuoteManager();

        $this->assertFalse($obj->contains($this->quoteProvider));

        $obj->addProvider($this->quoteProvider);
        $this->assertTrue($obj->contains($this->quoteProvider));

        $this->assertFalse($obj->contains($quoteProvider));
    }

    /**
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException() {

        // Set a Color provider mock.
        $colorProvider = new RedColorProvider();

        $obj = new QuoteManager();

        try {

            $obj->contains($colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements QuoteProviderInterface", $ex->getMessage());
        }
    }

    /**
     * Tests the getProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetProvider() {

        $obj = new QuoteManager();
        $obj->addProvider($this->quoteProvider);

        $this->assertSame($this->quoteProvider, $obj->getProvider("domain"));
        $this->assertNull($obj->getProvider("github"));
    }
}
