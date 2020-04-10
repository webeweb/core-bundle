<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Toast;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\WBWCoreInterface;

/**
 * Toast interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Toast
 */
class ToastInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals(WBWCoreInterface::CORE_DANGER, ToastInterface::TOAST_DANGER);
        $this->assertEquals(WBWCoreInterface::CORE_INFO, ToastInterface::TOAST_INFO);
        $this->assertEquals(WBWCoreInterface::CORE_SUCCESS, ToastInterface::TOAST_SUCCESS);
        $this->assertEquals(WBWCoreInterface::CORE_WARNING, ToastInterface::TOAST_WARNING);
    }
}
