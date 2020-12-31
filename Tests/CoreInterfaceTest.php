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
use WBW\Bundle\CoreBundle\WBWCoreInterface;

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
    public function test__construct(): void {

        $this->assertEquals(WBWCoreInterface::CORE_DANGER, CoreInterface::CORE_DANGER);
        $this->assertEquals(WBWCoreInterface::CORE_INFO, CoreInterface::CORE_INFO);
        $this->assertEquals(WBWCoreInterface::CORE_SUCCESS, CoreInterface::CORE_SUCCESS);
        $this->assertEquals(WBWCoreInterface::CORE_WARNING, CoreInterface::CORE_WARNING);
    }
}
