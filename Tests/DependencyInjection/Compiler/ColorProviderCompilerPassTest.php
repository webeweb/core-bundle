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

use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\ColorProviderCompilerPass;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Manager\ColorManager;
use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Color provider compiler pass test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection\Compiler
 */
class ColorProviderCompilerPassTest extends AbstractTestCase {

    /**
     * Color manager.
     *
     * @var string
     */
    private $colorManager;

    /**
     * Color provider.
     *
     * @var string
     */
    private $colorProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Color manager mock.
        $this->colorManager = ColorManager::class;

        // Set a Color provider mock.
        $this->colorProvider = ColorProviderInterface::class;
    }

    /**
     * Test process()
     *
     * @return void
     */
    public function testProcess(): void {

        $obj = new ColorProviderCompilerPass();

        $obj->process($this->containerBuilder);
        $this->assertFalse($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));

        // Register the Color manager mock.
        $this->containerBuilder->register(ColorManager::SERVICE_NAME, $this->colorManager);

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        // Register the Color provider.
        $this->containerBuilder->register(RedColorProvider::SERVICE_NAME, $this->colorProvider)->addTag(ColorProviderInterface::COLOR_PROVIDER_TAG_NAME);

        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertFalse($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("addProvider"));

        $obj->process($this->containerBuilder);
        $this->assertTrue($this->containerBuilder->hasDefinition(ColorManager::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->hasDefinition(RedColorProvider::SERVICE_NAME));
        $this->assertTrue($this->containerBuilder->getDefinition(ColorManager::SERVICE_NAME)->hasMethodCall("addProvider"));
    }
}
