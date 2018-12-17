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

use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Notification\WarningNotification;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Warning notification test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class WarningNotificationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new WarningNotification("warning");

        $this->assertEquals(NotificationInterface::NOTIFICATION_WARNING, $obj->getType());
        $this->assertEquals("warning", $obj->getContent());
    }

}
