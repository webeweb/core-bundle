<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener\TestNotificationEventListenerTrait;

/**
 * Notification event listener trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class NotificationEventListenerTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestNotificationEventListenerTrait();

        $this->assertNull($obj->getNotificationEventListener());
    }

    /**
     * Tests the setNotificationEVentListener() method.
     *
     * @return void
     */
    public function testSetNotificationEVentListener() {

        // Set a Notification event listener mock.
        $notificationEventListener = new NotificationEventListener($this->session);

        $obj = new TestNotificationEventListenerTrait();

        $obj->setNotificationEventListener($notificationEventListener);
        $this->assertSame($notificationEventListener, $obj->getNotificationEventListener());
    }

}
