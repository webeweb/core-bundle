<?php

/**
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
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class KernelEventListenerTest extends AbstractFrameworkTestCase {

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Theme manager mock.
        $this->themeManager = new ThemeManager($this->twigEnvironment);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $this->assertEquals("webeweb.core.eventlistener.kernel", KernelEventListener::SERVICE_NAME);
        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getUser());
    }

    /**
     * Tests the getUser() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testGetUser() {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $this->user = null;
        $this->assertNull($obj->getUser());

        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->assertSame($this->user, $obj->getUser());
    }

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelException() {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new GetResponseForExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, new Exception());
        $this->assertSame($arg, $obj->onKernelException($arg));
    }

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelExceptionWithBadUserRoleException() {

        // Set an User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();

        // Set a Bad user role exception mock.
        $ex = new BadUserRoleException($this->user, [], "redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new GetResponseForExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelExceptionWithRedirectResponseException() {

        // Set a Redirect response exception mock.
        $ex = new RedirectResponseException("redirectUrl", "originUrl");

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $arg = new GetResponseForExceptionEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertInstanceOf(RedirectResponse::class, $arg->getResponse());
        $this->assertEquals("redirectUrl", $arg->getResponse()->getTargetUrl());
    }

    /**
     * Tests the onKernelRequest() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testOnKernelRequest() {

        $obj = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $obj->onKernelRequest(new GetResponseEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

}
