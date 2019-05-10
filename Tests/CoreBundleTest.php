<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use WBW\Bundle\CoreBundle\CoreBundle;
use WBW\Bundle\CoreBundle\CoreInterface;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\ColorProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\QuoteProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\CoreExtension;

/**
 * Core bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class CoreBundleTest extends AbstractTestCase {

    /**
     * Tests the build() method.
     *
     * @return void
     */
    public function testBuild() {

        $obj = new CoreBundle();

        $this->assertNull($obj->build($this->containerBuilder));

        $passConfig = $this->containerBuilder->getCompilerPassConfig();
        $this->assertInstanceOf(ColorProviderCompilerPass::class, $passConfig->getBeforeOptimizationPasses()[3]);
        $this->assertInstanceOf(QuoteProviderCompilerPass::class, $passConfig->getBeforeOptimizationPasses()[4]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(CoreInterface::CORE_DANGER, CoreBundle::CORE_DANGER);
        $this->assertEquals(CoreInterface::CORE_INFO, CoreBundle::CORE_INFO);
        $this->assertEquals(CoreInterface::CORE_SUCCESS, CoreBundle::CORE_SUCCESS);
        $this->assertEquals(CoreInterface::CORE_WARNING, CoreBundle::CORE_WARNING);
    }

    /**
     * Tests the getAssetsRelativeDirectory() method.
     *
     * @return void
     */
    public function testGetAssetsRelativeDirectory() {

        $obj = new CoreBundle();

        $res = $obj->getAssetsRelativeDirectory();
        $this->assertEquals("/Resources/assets", $res);
    }

    /**
     * Tests the getContainerExtension() method.
     *
     * @return void
     */
    public function testGetContainerExtension() {

        $obj = new CoreBundle();

        $res = $obj->getContainerExtension();
        $this->assertInstanceOf(CoreExtension::class, $res);
    }
}
