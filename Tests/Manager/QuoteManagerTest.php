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
     * Quote provider
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.core.manager.quote", QuoteManager::SERVICE_NAME);

        $obj = new QuoteManager();

        $this->assertEquals([], $obj->getProviders());
    }

    /**
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContains() {

        // Set a Quote provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
        $quoteProvider->expects($this->any())->method("getDomain")->willReturn("domain2");

        // Set a Color provider mock.
        $colorProvider = new RedColorProvider();

        $obj = new QuoteManager();

        $obj->addProvider($quoteProvider);
        $obj->addProvider($this->quoteProvider);
        $this->assertTrue($obj->contains($this->quoteProvider));

        $obj->addProvider($colorProvider);
        $this->assertFalse($obj->contains($colorProvider));
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRegisterProvider() {

        $obj = new QuoteManager();

        $obj->registerProvider($this->quoteProvider);
        $this->assertSame($this->quoteProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     */
    public function testRegisterProviderWithAlreadyRegisteredException() {

        $obj = new QuoteManager();

        try {

            $obj->registerProvider($this->quoteProvider);
            $obj->registerProvider($this->quoteProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }
}
