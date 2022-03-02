<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\Notification\NotificationInterface;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class NotificationEventListenerTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Session mock.
        $this->session = $this->getMockBuilder(Session::class)->getMock();
        $this->session->expects($this->any())->method("getFlashBag")->willReturn(new FlashBag());
    }

    /**
     * Tests onNotify()
     *
     * @return void
     */
    public function testOnNotify(): void {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();
        $notification->expects($this->any())->method("getType")->willReturn("type");

        $obj = new NotificationEventListener($this->session);

        $arg = new NotificationEvent("eventName", $notification);

        $this->assertSame($arg, $obj->onNotify($arg));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event_listener.notification", NotificationEventListener::SERVICE_NAME);

        $obj = new NotificationEventListener($this->session);

        $this->assertSame($this->session, $obj->getSession());
    }
}
