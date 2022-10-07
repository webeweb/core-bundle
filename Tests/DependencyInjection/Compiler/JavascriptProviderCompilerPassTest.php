<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler;

use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\JavascriptProviderCompilerPass;
use WBW\Bundle\CoreBundle\Provider\JavascriptProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Manager\JavascriptManager;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;

/**
 * Javascript provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class JavascriptProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Javascript manager.
     *
     * @var string
     */
    private $javascriptManager;

    /**
     * Javascript provider.
     *
     * @var string
     */
    private $javascriptProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Javascript manager mock.
        $this->javascriptManager = JavascriptManager::class;

        // Set a Javascript provider mock.
        $this->javascriptProvider = JavascriptProviderInterface::class;
    }

    /**
     * Tests process()
     *
     * @return void
     */
    public function testProcess(): void {

        $obj = new JavascriptProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(JavascriptManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(JavascriptProvider::SERVICE_NAME));

        // Register the Javascript manager mock.
        $this->containerBuilder->register(JavascriptManager::SERVICE_NAME, $this->javascriptManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(JavascriptManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(JavascriptProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(JavascriptManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        // Register the Javascript provider.
        $this->containerBuilder->register(JavascriptProvider::SERVICE_NAME, $this->javascriptProvider)->addTag(JavascriptProviderInterface::JAVASCRIPT_PROVIDER_TAG_NAME);

        $this->assertTrue($this->containerBuilder->hasDefinition(JavascriptManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(JavascriptProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(JavascriptManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(JavascriptManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(JavascriptProvider::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->getDefinition(JavascriptManager::SERVICE_NAME)->hasMethodCall("addProvider"));
    }
}
