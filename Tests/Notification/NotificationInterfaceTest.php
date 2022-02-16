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
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\WBWCoreInterface;

/**
 * Notification interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class NotificationInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(WBWCoreInterface::CORE_DANGER, NotificationInterface::NOTIFICATION_DANGER);
        $this->assertEquals(WBWCoreInterface::CORE_INFO, NotificationInterface::NOTIFICATION_INFO);
        $this->assertEquals(WBWCoreInterface::CORE_SUCCESS, NotificationInterface::NOTIFICATION_SUCCESS);
        $this->assertEquals(WBWCoreInterface::CORE_WARNING, NotificationInterface::NOTIFICATION_WARNING);
    }
}
