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
