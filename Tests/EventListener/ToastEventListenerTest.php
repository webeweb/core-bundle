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
use Throwable;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\ToastInterface;

/**
 * Toast event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class ToastEventListenerTest extends AbstractTestCase {

    /**
     * Symfony backward compatibility.
     *
     * @var SymfonyBCServiceInterface
     */
    private $symfonyBCService;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Symfony backward compatibility service mock.
        $this->symfonyBCService = $this->getMockBuilder(SymfonyBCServiceInterface::class)->getMock();
    }

    /**
     * Test onToast()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testOnToast(): void {

        // Set a Session mock.
        $this->session = $this->getMockBuilder(Session::class)->getMock();
        $this->session->expects($this->any())->method("getFlashBag")->willReturn(new FlashBag());

        // Set the Symfony backward compatibility service mock.
        $this->symfonyBCService->expects($this->any())->method("getSession")->willReturn($this->session);

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();
        $toast->expects($this->any())->method("getType")->willReturn("type");

        $obj = new ToastEventListener($this->symfonyBCService);

        $arg = new ToastEvent("eventName", $toast);

        $this->assertSame($arg, $obj->onToast($arg));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event_listener.toast", ToastEventListener::SERVICE_NAME);

        $obj = new ToastEventListener($this->symfonyBCService);

        $this->assertSame($this->symfonyBCService, $obj->getSymfonyBCService());
    }
}
