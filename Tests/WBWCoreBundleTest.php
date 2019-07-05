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

use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Bundle\CoreBundle\WBWCoreBundle;

/**
 * Core bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class WBWCoreBundleTest extends AbstractTestCase {

    /**
     * Tests the build() method.
     *
     * @return void
     */
    public function testBuild() {

        $obj = new WBWCoreBundle();

        $this->assertNull($obj->build($this->containerBuilder));
    }

    /**
     * Tests the getAssetsRelativeDirectory() method.
     *
     * @return void
     */
    public function testGetAssetsRelativeDirectory() {

        $obj = new WBWCoreBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Tests the getContainerExtension() method.
     *
     * @return void
     */
    public function testGetContainerExtension() {

        $obj = new WBWCoreBundle();

        $this->assertInstanceOf(WBWCoreExtension::class, $obj->getContainerExtension());
    }
}
