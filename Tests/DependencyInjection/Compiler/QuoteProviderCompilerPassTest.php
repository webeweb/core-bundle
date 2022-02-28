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
use WBW\Bundle\CoreBundle\Manager\Asset\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\Asset\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class QuoteProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Quote manager.
     *
     * @var string
     */
    private $quoteManager;

    /**
     * Quote provider.
     *
     * @var string
     */
    private $quoteProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Quote manager mock.
        $this->quoteManager = QuoteManager::class;

        // Set a Quote provider mock.
        $this->quoteProvider = QuoteProviderInterface::class;
    }

    /**
     * Tests process()
     *
     * @return void
     */
    public function testProcess(): void {

        // Set a Service name mock.
        $serviceName = "wbw.core.provider.quote";

        $obj = new QuoteProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));

        // Register the Quote manager mock.
        $this->containerBuilder->register(QuoteManager::SERVICE_NAME, $this->quoteManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition($serviceName));
        $this->assertFalse($this->containerBuilder->getDefinition(QuoteManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        // Register the Quote provider.
        $this->containerBuilder->register($serviceName, $this->quoteProvider)->addTag(QuoteProviderInterface::QUOTE_TAG_NAME);

        $this->assertTrue($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition($serviceName));
        $this->assertFalse($this->containerBuilder->getDefinition(QuoteManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(QuoteManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition($serviceName));
        $this->assertTrue($this->containerBuilder->getDefinition(QuoteManager::SERVICE_NAME)->hasMethodCall("addProvider"));
    }
}
