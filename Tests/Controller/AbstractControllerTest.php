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

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
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
     * Tests the notify() method.
     *
     * @return void
     */
    public function testNotify() {

        // Set a Notification mock.
        $notification = $this->getMockBuilder(NotificationInterface::class)->getMock();

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
