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

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Throwable;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Exception\RedirectResponseException;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * Test getUser()
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
     * Test onKernelException()
     *
     * @return void
     */
    public function testOnKernelException(): void {

        // Set a Throwable mock.
        $throwable = $this->getMockBuilder(Throwable::class)->getMock();

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new ExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $throwable);
        $this->assertSame($arg, $obj->onKernelException($arg));
    }

    /**
     * Test onKernelException()
     *
     * @return void
     */
    public function testOnKernelExceptionWithBadUserRoleException(): void {

        // Set a User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();

        // Set a Bad user role exception mock.
        $ex = new BadUserRoleException($this->user, [], "redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new ExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Test onKernelException()
     *
     * @return void
     */
    public function testOnKernelExceptionWithRedirectResponseException(): void {

        // Set a Redirect response exception mock.
        $ex = new RedirectResponseException("redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new ExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Test onKernelRequest()
     *
     * @return void
     */
    public function testOnKernelRequest(): void {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $obj->onKernelRequest(new RequestEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

    /**
     * Test __construct()
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
