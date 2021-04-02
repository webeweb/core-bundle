<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Notification;

use WBW\Bundle\CoreBundle\Asset\Notification\InfoNotification;
use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Info notification test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Notification
 */
class InfoNotificationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfoNotification("info");

        $this->assertEquals(NotificationInterface::NOTIFICATION_INFO, $obj->getType());
        $this->assertEquals("info", $obj->getContent());
    }
}
