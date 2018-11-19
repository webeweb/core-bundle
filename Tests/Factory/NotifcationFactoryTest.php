<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Factory;

use WBW\Bundle\CoreBundle\Factory\NotificationFactory;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Notifcation factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Factory
 */
class NotifcationFactoryTest extends AbstractFrameworkTestCase {

    /**
     * Tests the newDangerNotification() method.
     *
     * @return void
     */
    public function testNewDangerNotification() {

        $obj = NotificationFactory::newDangerNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_DANGER, $obj->getType());
    }

    /**
     * Tests the newDefaultNotification() method.
     *
     * @return void
     */
    public function testNewDefaultNotification() {

        $obj = NotificationFactory::newDefaultNotification("content", "type");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the newInfoNotification() method.
     *
     * @return void
     */
    public function testNewInfoNotification() {

        $obj = NotificationFactory::newInfoNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_INFO, $obj->getType());
    }

    /**
     * Tests the newSuccessNotification() method.
     *
     * @return void
     */
    public function testNewSuccessNotification() {

        $obj = NotificationFactory::newSuccessNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_SUCCESS, $obj->getType());
    }

    /**
     * Tests the newWarningNotification() method.
     *
     * @return void
     */
    public function testNewWarningNotification() {

        $obj = NotificationFactory::newWarningNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_WARNING, $obj->getType());
    }

}
