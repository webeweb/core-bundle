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
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Throwable;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Controller\AbstractController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Service\SymfonyBCService;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Controller\TestAbstractController;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ToastInterface;

/**
 * Abstract controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class AbstractControllerTest extends AbstractWebTestCase {

    /**
     * Controller.
     *
     * @var AbstractController
     */
    private $controller;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a controller mock.
        $this->controller = static::$kernel->getContainer()->get(TestAbstractController::class);
    }

    /**
     * Test getContainer()
     *
     * @return void
     */
    public function testGetContainer(): void {

        $obj = $this->controller;

        $res = $obj->getContainer();
        $this->assertInstanceOf(ContainerInterface::class, $res);
    }

    /**
     * Test getEntityManager()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetEntityManager(): void {

        $obj = $this->controller;

        $res = $obj->getEntityManager();
        $this->assertInstanceOf(EntityManagerInterface::class, $res);
    }

    /**
     * Test getEventDispatcher()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetEventDispatcher(): void {

        $obj = $this->controller;

        $res = $obj->getEventDispatcher();
        $this->assertInstanceOf(EventDispatcherInterface::class, $res);
    }

    /**
     * Test getKernelEventListener()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetKernelEventListener(): void {

        $obj = $this->controller;

        $res = $obj->getKernelEventListener();
        $this->assertInstanceOf(KernelEventListener::class, $res);
    }

    /**
     * Test getLogger()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetLogger(): void {

        $obj = $this->controller;

        $res = $obj->getLogger();
        $this->assertInstanceOf(LoggerInterface::class, $res);
    }

    /**
     * Test getMailer()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetMailer(): void {

        $obj = $this->controller;

        $res = $obj->getMailer();
        $this->assertInstanceOf(MailerInterface::class, $res);
    }

    /**
     * Test getRouter()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetRouter(): void {

        $obj = $this->controller;

        $res = $obj->getRouter();
        $this->assertInstanceOf(RouterInterface::class, $res);
    }

    /**
     * Test getSession()
     *
     * @return void
     */
    public function testGetSession(): void {

        $obj = $this->controller;

        try {

            $res = $obj->getSession();
            $this->assertInstanceOf(SessionInterface::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf("Symfony\\Component\\HttpFoundation\\Exception\\SessionNotFoundException", $ex);
            $this->assertEquals("There is currently no session available.", $ex->getMessage());
        }
    }

    /**
     * Test getSubscribedServices()
     *
     * @return void
     */
    public function testGetSubscribedServices(): void {

        $res = AbstractController::getSubscribedServices();

        $this->assertArrayHasKey("doctrine.orm.entity_manager", $res);
        $this->assertArrayHasKey("event_dispatcher", $res);
        $this->assertArrayHasKey("logger", $res);
        $this->assertArrayHasKey("mailer", $res);
        $this->assertArrayHasKey("translator", $res);
        $this->assertArrayHasKey(KernelEventListener::SERVICE_NAME, $res);
        $this->assertArrayHasKey(SymfonyBCService::SERVICE_NAME, $res);
    }

    /**
     * Test getTranslator()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetTranslator(): void {

        $obj = $this->controller;

        $res = $obj->getTranslator();
        $this->assertInstanceOf(TranslatorInterface::class, $res);
    }

    /**
     * Test getTwig()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetTwig(): void {

        $obj = $this->controller;

        $res = $obj->getTwig();
        $this->assertInstanceOf(Environment::class, $res);
    }

    /**
     * Test hasRoleOrRedirect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testHasRoleOrRedirect(): void {

        $obj = new TestAbstractController();
        $obj->setContainer(static::$kernel->getContainer());

        try {

            $obj->hasRolesOrRedirect(["ROLE_USER"], false, "redirectUrl");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(BadUserRoleException::class, $ex);
            $this->assertEquals('User "anonymous" is not allowed to access to "" with roles [ROLE_USER]', $ex->getMessage());
        }
    }

    /**
     * Test newDefaultJsonResponseData()
     *
     * @return void
     */
    public function testNewDefaultJsonResponseData(): void {

        $obj = new TestAbstractController();

        $res = $obj->newDefaultJsonResponseData(true, [], "message");
        $this->assertEquals([], $res->getData());
        $this->assertNull($res->getErrors());
        $this->assertEquals("message", $res->getMessage());
        $this->assertTrue($res->getSuccess());
    }

    /**
     * Test notify()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNotify(): void {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

        $obj = new TestAbstractController();
        $obj->setContainer(static::$kernel->getContainer());

        $res = $obj->notify("eventName", $notification);
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals("eventName", $res->getEventName());
        $this->assertSame($notification, $res->getNotification());
    }

    /**
     * Test toast()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testToast(): void {

        // Set a Toast mock.
        $toast = $this->getMockBuilder(ToastInterface::class)->getMock();

        $obj = new TestAbstractController();
        $obj->setContainer(static::$kernel->getContainer());

        $res = $obj->toast("eventName", $toast);
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals("eventName", $res->getEventName());
        $this->assertSame($toast, $res->getToast());
    }

    /**
     * Test translate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testTranslate(): void {

        $obj = new TestAbstractController();
        $obj->setContainer(static::$kernel->getContainer());

        $this->assertEquals("id", $obj->translate("id"));
    }
}
