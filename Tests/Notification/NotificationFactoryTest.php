<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Notification;

use WBW\Bundle\CoreBundle\Notification\NotificationFactory;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Notification factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class NotificationFactoryTest extends AbstractTestCase {

    /**
     * Tests newDangerNotification()
     *
     * @return void
     */
    public function testNewDangerNotification(): void {

        $obj = NotificationFactory::newDangerNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_DANGER, $obj->getType());
    }

    /**
     * Tests newDefaultNotification()
     *
     * @return void
     */
    public function testNewDefaultNotification(): void {

        $obj = NotificationFactory::newDefaultNotification("content", "type");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests newInfoNotification()
     *
     * @return void
     */
    public function testNewInfoNotification(): void {

        $obj = NotificationFactory::newInfoNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_INFO, $obj->getType());
    }

    /**
     * Tests newSuccessNotification()
     *
     * @return void
     */
    public function testNewSuccessNotification(): void {

        $obj = NotificationFactory::newSuccessNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_SUCCESS, $obj->getType());
    }

    /**
     * Tests newWarningNotification()
     *
     * @return void
     */
    public function testNewWarningNotification(): void {

        $obj = NotificationFactory::newWarningNotification("content");

        $this->assertInstanceOf(NotificationInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_WARNING, $obj->getType());
    }
}
