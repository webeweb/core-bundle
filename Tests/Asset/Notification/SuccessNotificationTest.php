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

use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Asset\Notification\SuccessNotification;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Success notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Notification
 */
class SuccessNotificationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessNotification("success");

        $this->assertEquals(NotificationInterface::NOTIFICATION_SUCCESS, $obj->getType());
        $this->assertEquals("success", $obj->getContent());
    }
}
