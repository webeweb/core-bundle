<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Toast\ToastInterface;

/**
 * Toast event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class ToastEventListenerTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Session mock.
        $this->session = $this->getMockBuilder(Session::class)->getMock();
        $this->session->expects($this->any())->method("getFlashBag")->willReturn(new FlashBag());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.core.event_listener.toast", ToastEventListener::SERVICE_NAME);

        $obj = new ToastEventListener($this->session);

        $this->assertSame($this->session, $obj->getSession());
    }

    /**
     * Tests the onToast() method.
     *
     * @return void
     */
    public function testOnToast() {

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        $obj = new ToastEventListener($this->session);

        $arg = new ToastEvent("eventName", $toast);

        $this->assertSame($arg, $obj->onToast($arg));
    }
}