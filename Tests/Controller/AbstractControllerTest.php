<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Throwable;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Controller\TestAbstractController;
use WBW\Bundle\CoreBundle\Tests\TestCaseHelper;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ToastInterface;

/**
 * Abstract controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class AbstractControllerTest extends AbstractTestCase {

    /**
     * Form helper.
     *
     * @var FormHelper
     */
    private $formHelper;

    /**
     * Kernel event listener.
     *
     * @var KernelEventListener
     */
    private $kernelEventListener;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Form helper mock.
        $this->formHelper = $this->getMockBuilder(FormHelper::class)->disableOriginalConstructor()->getMock();

        // Set a Kernel event listener mock.
        $this->kernelEventListener = $this->getMockBuilder(KernelEventListener::class)->disableOriginalConstructor()->getMock();

        // Set the Container builder mock.
        $this->containerBuilder->set(FormHelper::SERVICE_NAME, $this->formHelper);
        $this->containerBuilder->set(KernelEventListener::SERVICE_NAME, $this->kernelEventListener);
    }

    /**
     * Tests getContainer()
     *
     * @return void
     */
    public function testGetContainer(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getContainer();
        $this->assertInstanceOf(ContainerInterface::class, $res);
        $this->assertSame($this->containerBuilder, $res);
    }

    /**
     * Tests getEntityManager()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetEntityManager(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getEntityManager();
        $this->assertInstanceOf(EntityManagerInterface::class, $res);
        $this->assertSame($this->entityManager, $res);
    }

    /**
     * Tests getEventDispatcher()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetEventDispatcher(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getEventDispatcher();
        $this->assertInstanceOf(EventDispatcherInterface::class, $res);
        $this->assertSame($this->eventDispatcher, $res);
    }

    /**
     * Tests getFormHelper()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetFormHelper(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getFormHelper();
        $this->assertInstanceOf(FormHelper::class, $res);
        $this->assertSame($this->formHelper, $res);
    }

    /**
     * Tests getKernelEventListener()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetKernelEventListener(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getKernelEventListener();
        $this->assertInstanceOf(KernelEventListener::class, $res);
        $this->assertSame($this->kernelEventListener, $res);
    }

    /**
     * Tests getLogger()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetLogger(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getLogger();
        $this->assertInstanceOf(LoggerInterface::class, $res);
        $this->assertSame($this->logger, $res);
    }

    /**
     * Tests getMailer()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetMailer(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getMailer();
        $this->assertInstanceOf(MailerInterface::class, $res);
        $this->assertSame($this->mailer, $res);
    }

    /**
     * Tests getRouter()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetRouter(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getRouter();
        $this->assertInstanceOf(RouterInterface::class, $res);
        $this->assertSame($this->router, $res);
    }

    /**
     * Tests getSession()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSession(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getSession();
        $this->assertInstanceOf(SessionInterface::class, $res);
        $this->assertSame($this->session, $res);
    }

    /**
     * Tests getTranslator()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetTranslator(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getTranslator();
        $this->assertInstanceOf(TranslatorInterface::class, $res);
        $this->assertSame($this->translator, $res);
    }

    /**
     * Tests getTwig()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetTwig(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getTwig();
        $this->assertInstanceOf(Environment::class, $res);
        $this->assertSame($this->twigEnvironment, $res);
    }

    /**
     * Tests hasRoleOrRedirect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testHasRoleOrRedirect(): void {

        // Set the User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->user->expects($this->any())->method("getRoles")->willReturn(["ROLE_GITHUB"]);

        // Set the Kernel event listener mock.
        $this->kernelEventListener->expects($this->any())->method("getUser")->willReturn($this->user);

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->hasRolesOrRedirect(["ROLE_GITHUB"], false, "redirect");
        $this->assertTrue($res);
    }

    /**
     * Tests hasRoleOrRedirect()
     *
     * @return void
     */
    public function testHasRoleOrRedirectWithBadUserRoleException(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        try {

            $obj->hasRolesOrRedirect(["ROLE_GITHUB"], false, "redirectUrl");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(BadUserRoleException::class, $ex);
            $this->assertEquals('User "anonymous" is not allowed to access to "" with roles [ROLE_GITHUB]', $ex->getMessage());
        }
    }

    /**
     * Tests newDefaultJsonResponseData()
     *
     * @return void
     */
    public function testNewDefaultJsonResponseData(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->newDefaultJsonResponseData(true, [], "message");
        $this->assertEquals([], $res->getData());
        $this->assertNull($res->getErrors());
        $this->assertEquals("message", $res->getMessage());
        $this->assertTrue($res->getSuccess());
    }

    /**
     * Tests notify()
     *
     * @return void
     */
    public function testNotify(): void {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        // Set a dispatch() callback.
        $dispatchCallback = TestCaseHelper::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchCallback);

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notify("eventName", $notification);
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals("eventName", $res->getEventName());
        $this->assertSame($notification, $res->getNotification());
    }

    /**
     * Tests notify()
     *
     * @return void
     */
    public function testNotifyWithoutListener(): void {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(false);

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notify("eventName", $notification);
        $this->assertNotNull($res);
    }

    /**
     * Tests toast()
     *
     * @return void
     */
    public function testToast(): void {

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        // Set a dispatch() callback.
        $dispatchCallback = TestCaseHelper::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchCallback);

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toast("eventName", $toast);
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals("eventName", $res->getEventName());
        $this->assertSame($toast, $res->getToast());
    }

    /**
     * Tests toast()
     *
     * @return void
     */
    public function testToastWithoutListener(): void {

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(false);

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toast("eventName", $toast);
        $this->assertNotNull($res);
    }

    /**
     * Tests translate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testTranslate(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $this->assertEquals("id", $obj->translate("id"));
    }
}
