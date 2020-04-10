<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Event;

use WBW\Bundle\CoreBundle\Event\NotificationEvents;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Notification events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class NotificationEventsTest extends AbstractTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("wbw.core.event.notification.danger", NotificationEvents::NOTIFICATION_DANGER);
        $this->assertEquals("wbw.core.event.notification.info", NotificationEvents::NOTIFICATION_INFO);
        $this->assertEquals("wbw.core.event.notification.success", NotificationEvents::NOTIFICATION_SUCCESS);
        $this->assertEquals("wbw.core.event.notification.warning", NotificationEvents::NOTIFICATION_WARNING);
    }
}
