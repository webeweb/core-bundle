<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Model\ActionResponse;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Action response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class ActionResponseTest extends AbstractTestCase {

    /**
     * Tests the setNotify() method.
     *
     * @return void
     */
    public function tesSetNotify() {

        $obj = new ActionResponse();

        $obj->setNotify("notify");
        $this->assertEquals("notify", $obj->getNotify());
    }

    /**
     * Tests the setStatus() method.
     *
     * @return void
     */
    public function tesSetStatus() {

        $obj = new ActionResponse();

        $obj->setStatus(200);
        $this->assertEquals(200, $obj->getStatus());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new ActionResponse();

        $this->assertNull($obj->getNotify());
        $this->assertNull($obj->getStatus());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new ActionResponse();

        $res = ["status" => null, "notify" => null];
        $this->assertEquals($res, $obj->jsonSerialize());
    }
}
