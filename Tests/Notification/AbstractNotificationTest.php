<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Notification;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Notification\TestNotification;

/**
 * Abstract notification test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class AbstractNotificationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestNotification();

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent() {

        $obj = new TestNotification();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new TestNotification();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

}
