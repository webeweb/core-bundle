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

use WBW\Bundle\CoreBundle\Toast\DangerToast;
use WBW\Bundle\CoreBundle\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Danger toast test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Toast
 */
class DangerToastTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DangerToast("danger");

        $this->assertEquals(ToastInterface::TOAST_DANGER, $obj->getType());
        $this->assertEquals("danger", $obj->getContent());
    }
}