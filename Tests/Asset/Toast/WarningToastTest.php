<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Toast;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Asset\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Asset\Toast\WarningToast;

/**
 * Warning toast test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Toast
 */
class WarningToastTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WarningToast("warning");

        $this->assertEquals(ToastInterface::TOAST_WARNING, $obj->getType());
        $this->assertEquals("warning", $obj->getContent());
    }
}
