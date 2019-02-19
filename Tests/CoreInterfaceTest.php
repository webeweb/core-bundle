<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use WBW\Bundle\CoreBundle\CoreInterface;

/**
 * Core interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class CoreInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("danger", CoreInterface::CORE_DANGER);
        $this->assertEquals("info", CoreInterface::CORE_INFO);
        $this->assertEquals("success", CoreInterface::CORE_SUCCESS);
        $this->assertEquals("warning", CoreInterface::CORE_WARNING);
    }
}
