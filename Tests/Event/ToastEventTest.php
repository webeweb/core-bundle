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

use WBW\Bundle\CoreBundle\Asset\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Toast event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class ToastEventTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $this->assertEquals("wbw.core.event.toast.danger", ToastEvent::DANGER);
        $this->assertEquals("wbw.core.event.toast.info", ToastEvent::INFO);
        $this->assertEquals("wbw.core.event.toast.success", ToastEvent::SUCCESS);
        $this->assertEquals("wbw.core.event.toast.warning", ToastEvent::WARNING);

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        $obj = new ToastEvent("eventName", $toast);

        $this->assertEquals("eventName", $obj->getEventName());
        $this->assertSame($toast, $obj->getToast());
    }
}
