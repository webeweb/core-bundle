<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Controller;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Controller\TestController;

/**
 * Abstract controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class AbstractControllerTest extends AbstractFrameworkTestCase {

    /**
     * Kernel event listener.
     *
     * @var KernelEventListener
     */
    private $kernelEventListener;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Kernel event listener mock.
        $this->kernelEventListener = $this->getMockBuilder(KernelEventListener::class)->disableOriginalConstructor()->getMock();

        // Set the COntainer builder mock.
        $this->containerBuilder->set(KernelEventListener::SERVICE_NAME, $this->kernelEventListener);
    }

    /**
     * Tests the getEventDispatcher() method.
     *
     * @return void
     */
    public function testGetEventDispatcher() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getEventDispatcher();
        $this->assertInstanceOf(EventDispatcherInterface::class, $res);
        $this->assertSame($this->eventDispatcher, $res);
    }

    /**
     * Tests the getKernelEventListener() method.
     *
     * @return void
     */
    public function testGetKernelEventListener() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getKernelEventListener();
        $this->assertInstanceOf(KernelEventListener::class, $res);
        $this->assertSame($this->kernelEventListener, $res);
    }

    /**
     * Tests the getLogger() method.
     *
     * @return void
     */
    public function testGetLogger() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getLogger();
        $this->assertInstanceOf(LoggerInterface::class, $res);
        $this->assertSame($this->logger, $res);
    }

    /**
     * Tests the getRouter() method.
     *
     * @return void
     */
    public function testGetRouter() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getRouter();
        $this->assertInstanceOf(RouterInterface::class, $res);
        $this->assertSame($this->router, $res);
    }

    /**
     * Tests the getSession() method.
     *
     * @return void
     */
    public function testGetSession() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getSession();
        $this->assertInstanceOf(SessionInterface::class, $res);
        $this->assertSame($this->session, $res);
    }

    /**
     * Tests the getTranslator() method.
     *
     * @return void
     */
    public function testGetTranslator() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getTranslator();
        $this->assertInstanceOf(TranslatorInterface::class, $res);
        $this->assertSame($this->translator, $res);
    }

    /**
     * Tests the hasRoleOrRedirect() method.
     *
     * @return void
     */
    public function testHasRoleOrRedirect() {

        // Set the User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->user->expects($this->any())->method("getRoles")->willReturn(["ROLE_GITHUB"]);

        // Set the Kernel event listener mock.
        $this->kernelEventListener->expects($this->any())->method("getUser")->willReturn($this->user);

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->hasRolesOrRedirect(["ROLE_GITHUB"], false, "redirect");
        $this->assertTrue($res);
    }

    /**
     * Tests the hasRoleOrRedirect() method.
     *
     * @return void
     */
    public function testHasRoleOrRedirectWithBadUserRoleException() {

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        try {

            $obj->hasRolesOrRedirect(["ROLE_GITHUB"], false, "redirectUrl");
        } catch (Exception $ex) {

            $this->assertInstanceOf(BadUserRoleException::class, $ex);
            $this->assertEquals("User \"anonymous\" is not allowed to access to \"\" with roles [ROLE_GITHUB]", $ex->getMessage());
        }
    }

    /**
     * Tests the notify() method.
     *
     * @return void
     */
    public function testNotify() {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(false);

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notify("eventName", $notification);
        $this->assertNull($res);
    }

    /**
     * Tests the notify() method.
     *
     * @return void
     */
    public function testNotifyWithListener() {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturn(new NotificationEvent("eventName", $notification));

        $obj = new TestController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notify("eventName", $notification);
        $this->assertNotNull($res);
    }

}
