<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Notification;

use WBW\Bundle\CoreBundle\Notification\DefaultNotification;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * DefaultNotificationTest.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class DefaultNotificationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultNotification("type", "default");

        $this->assertEquals("type", $obj->getType());
        $this->assertEquals("default", $obj->getContent());
    }
}
