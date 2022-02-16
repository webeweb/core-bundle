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

use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener\TestNotificationEventListenerTrait;

/**
 * Notification event listener trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class NotificationEventListenerTraitTest extends AbstractTestCase {

    /**
     * Tests setNotificationEventListener()
     *
     * @return void
     */
    public function testSetNotificationEventListener(): void {

        // Set a Notification event listener mock.
        $notificationEventListener = new NotificationEventListener($this->session);

        $obj = new TestNotificationEventListenerTrait();

        $obj->setNotificationEventListener($notificationEventListener);
        $this->assertSame($notificationEventListener, $obj->getNotificationEventListener());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestNotificationEventListenerTrait();

        $this->assertNull($obj->getNotificationEventListener());
    }
}
