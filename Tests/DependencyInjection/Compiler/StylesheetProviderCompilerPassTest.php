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

use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\StylesheetProviderCompilerPass;
use WBW\Bundle\CoreBundle\Provider\StylesheetProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Manager\StylesheetManager;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;

/**
 * Stylesheet provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class StylesheetProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Stylesheet manager.
     *
     * @var string
     */
    private $stylesheetManager;

    /**
     * Stylesheet provider.
     *
     * @var string
     */
    private $stylesheetProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Stylesheet manager mock.
        $this->stylesheetManager = StylesheetManager::class;

        // Set a Stylesheet provider mock.
        $this->stylesheetProvider = StylesheetProviderInterface::class;
    }

    /**
     * Test process()
     *
     * @return void
     */
    public function testProcess(): void {

        $obj = new StylesheetProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(StylesheetManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(StylesheetProvider::SERVICE_NAME));

        // Register the Stylesheet manager mock.
        $this->containerBuilder->register(StylesheetManager::SERVICE_NAME, $this->stylesheetManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(StylesheetManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(StylesheetProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(StylesheetManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        // Register the Stylesheet provider.
        $this->containerBuilder->register(StylesheetProvider::SERVICE_NAME, $this->stylesheetProvider)->addTag(StylesheetProviderInterface::STYLESHEET_PROVIDER_TAG_NAME);

        $this->assertTrue($this->containerBuilder->hasDefinition(StylesheetManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(StylesheetProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(StylesheetManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(StylesheetManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(StylesheetProvider::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->getDefinition(StylesheetManager::SERVICE_NAME)->hasMethodCall("addProvider"));
    }
}
