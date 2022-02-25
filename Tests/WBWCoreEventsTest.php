<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use WBW\Bundle\CoreBundle\WBWCoreEvents;

/**
 * Core events test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class WBWCoreEventsTest extends AbstractTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event.notification.danger", WBWCoreEvents::NOTIFICATION_DANGER);
        $this->assertEquals("wbw.core.event.notification.info", WBWCoreEvents::NOTIFICATION_INFO);
        $this->assertEquals("wbw.core.event.notification.success", WBWCoreEvents::NOTIFICATION_SUCCESS);
        $this->assertEquals("wbw.core.event.notification.warning", WBWCoreEvents::NOTIFICATION_WARNING);

        $this->assertEquals("wbw.core.event.toast.danger", WBWCoreEvents::TOAST_DANGER);
        $this->assertEquals("wbw.core.event.toast.info", WBWCoreEvents::TOAST_INFO);
        $this->assertEquals("wbw.core.event.toast.success", WBWCoreEvents::TOAST_SUCCESS);
        $this->assertEquals("wbw.core.event.toast.warning", WBWCoreEvents::TOAST_WARNING);
    }
}
