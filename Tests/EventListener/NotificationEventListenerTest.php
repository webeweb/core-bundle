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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Throwable;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NotificationInterface;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class NotificationEventListenerTest extends AbstractTestCase {

    /**
     * Symfony backward compatibility.
     *
     * @var SymfonyBCServiceInterface
     */
    private $symfonyBCService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Symfony backward compatibility service mock.
        $this->symfonyBCService = $this->getMockBuilder(SymfonyBCServiceInterface::class)->getMock();
    }

    /**
     * Test onNotify()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testOnNotify(): void {

        // Set a Session mock.
        $this->session = $this->getMockBuilder(Session::class)->getMock();
        $this->session->expects($this->any())->method("getFlashBag")->willReturn(new FlashBag());

        // Set the Symfony backward compatibility service mock.
        $this->symfonyBCService->expects($this->any())->method("getSession")->willReturn($this->session);

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();
        $notification->expects($this->any())->method("getType")->willReturn("type");

        $obj = new NotificationEventListener($this->symfonyBCService);

        $arg = new NotificationEvent("eventName", $notification);

        $this->assertSame($arg, $obj->onNotify($arg));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event_listener.notification", NotificationEventListener::SERVICE_NAME);

        $obj = new NotificationEventListener($this->symfonyBCService);

        $this->assertSame($this->symfonyBCService, $obj->getSymfonyBCService());
    }
}
