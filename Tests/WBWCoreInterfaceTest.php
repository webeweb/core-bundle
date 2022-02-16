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

use WBW\Bundle\CoreBundle\WBWCoreInterface;

/**
 * Core interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class WBWCoreInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", WBWCoreInterface::CORE_DANGER);
        $this->assertEquals("info", WBWCoreInterface::CORE_INFO);
        $this->assertEquals("success", WBWCoreInterface::CORE_SUCCESS);
        $this->assertEquals("warning", WBWCoreInterface::CORE_WARNING);
    }
}
