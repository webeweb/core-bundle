<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler;

use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\QuoteProviderCompilerPass;
use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class QuoteProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Quote manager
     *
     * @var QuoteManager
     */
    private $quoteManager;

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

        // Set a Quote manager mock.
        $this->quoteManager = new QuoteManager();

        // Set a Quote provider mock.
        $this->quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
    }

    /**
     * Tests the process() method.
     *
     * @return void
     */
    public function testProcess() {

        $obj = new QuoteProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));

        // Register the Quote manager mock.
        $this->containerBuilder->register(QuoteManager::SERVICE_NAME, $this->quoteManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(QuoteManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        // Register the Quote provider.
        $this->containerBuilder->register("webeweb.core.provider.quote", $this->quoteProvider)->addTag(QuoteProviderInterface::TAG_NAME);
        $this->assertTrue($this->containerBuilder->hasDefinition("webeweb.core.provider.quote"));
        $this->assertTrue($this->containerBuilder->getDefinition("webeweb.core.provider.quote")->hasTag(QuoteProviderInterface::TAG_NAME));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->getDefinition(QuoteManager::SERVICE_NAME)->hasMethodCall("addProvider"));
    }
}
