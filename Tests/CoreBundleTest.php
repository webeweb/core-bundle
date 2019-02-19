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
     * Tests the getAssetsDirectory() method.
     *
     * @return void
     */
    public function testGetAssetsDirectory() {

        $obj = new CoreBundle();

        $res = $obj->getAssetsRelativeDirectory();
        $this->assertEquals("/Resources/assets", $res);
    }
}
