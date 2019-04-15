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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\ColorProviderCompilerPass;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class ColorProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Color manager
     *
     * @var ColorManager
     */
    private $colorManager;

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

        // Set a Color manager mock.
        $this->colorManager = new ColorManager();

        // Set a Color provider mock.
        $this->colorProvider = new RedColorProvider();
    }

    /**
     * Tests the process() method.
     *
     * @return void
     */
    public function testProcess() {

        $obj = new ColorProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));

        // Register the Color manager mock.
        $this->containerBuilder->register(ColorManager::SERVICE_NAME, $this->colorManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("registerProvider"));

        // Register the Color provider.
        $this->containerBuilder->register(RedColorProvider::SERVICE_NAME, $this->colorProvider)->addTag(RedColorProvider::TAG_NAME);

        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("registerProvider"));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("registerProvider"));
    }
}
