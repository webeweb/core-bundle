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

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use WBW\Bundle\CoreBundle\EventListener\SecurityEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Security event listener test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class SecurityEventListenerTest extends AbstractTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
    }

    /**
     * Test onInteractiveLogin()
     *
     * @return void
     */
    public function testOnInteractiveLogin(): void {

        // Set the Flash bag mock.
        $this->flashBag->expects($this->any())->method("add")->willReturn($this->flashBag);

        // Set the Session mock.
        $this->session->expects($this->any())->method("getBag")->willReturn($this->flashBag);

        // Set a Request mock.
        $request = $this->getMockBuilder(Request::class)->getMock();
        $request->expects($this->any())->method("getSession")->willReturn($this->session);

        // Set an Interactive login event mock.
        $event = new InteractiveLoginEvent($request, $this->token);

        $obj = new SecurityEventListener($this->translator, $this->user);

        $this->assertSame($event, $obj->onInteractiveLogin($event));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.event_listener.security", SecurityEventListener::SERVICE_NAME);

        $obj = new SecurityEventListener($this->translator, $this->user);

        $this->assertSame($this->translator, $obj->getTranslator());
        $this->assertSame($this->user, $obj->getUser());
    }
}
