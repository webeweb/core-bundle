<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use WBW\Bundle\CoreBundle\CoreBundle;

/**
 * Core bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class CoreBundleTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("danger", CoreBundle::CORE_DANGER);
        $this->assertEquals("info", CoreBundle::CORE_INFO);
        $this->assertEquals("success", CoreBundle::CORE_SUCCESS);
        $this->assertEquals("warning", CoreBundle::CORE_WARNING);
    }

    /**
     * Tests the getAssetsDirectory() method.
     *
     * @return void
     */
    public function testGetAssetsDirectory() {

        $obj = new CoreBundle();

        $res = $obj->getAssetsDirectory();
        $this->assertEquals("/Resources/assets", $res);
    }

}
