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

use Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseExceptionEvent;
use WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseRequestEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class KernelEventListenerTest extends AbstractTestCase {

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Theme manager mock.
        $this->themeManager = new ThemeManager($this->logger, $this->twigEnvironment);
    }

    /**
     * Tests getUser()
     *
     * @return void
     */
    public function testGetUser(): void {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $this->user = null;
        $this->assertNull($obj->getUser());

        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->assertSame($this->user, $obj->getUser());
    }

    /**
     * Tests onKernelException()
     *
     * @return void
     */
    public function testOnKernelException(): void {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new BaseExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, new Exception());
        $this->assertSame($arg, $obj->onKernelException($arg));
    }

    /**
     * Tests onKernelException()
     *
     * @return void
     */
    public function testOnKernelExceptionWithBadUserRoleException(): void {

        // Set an User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();

        // Set a Bad user role exception mock.
        $ex = new BadUserRoleException($this->user, [], "redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new BaseExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Tests onKernelException()
     *
     * @return void
     */
    public function testOnKernelExceptionWithRedirectResponseException(): void {

        // Set a Redirect response exception mock.
        $ex = new RedirectResponseException("redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new BaseExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Tests onKernelRequest()
     *
     * @return void
     */
    public function testOnKernelRequest(): void {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $obj->onKernelRequest(new BaseRequestEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, new Response()));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event_listener.kernel", KernelEventListener::SERVICE_NAME);

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getUser());
    }
}
