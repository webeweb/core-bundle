<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Notification;

use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Notification interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Notification
 */
class NotificationInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("danger", NotificationInterface::NOTIFICATION_DANGER);
        $this->assertEquals("info", NotificationInterface::NOTIFICATION_INFO);
        $this->assertEquals("success", NotificationInterface::NOTIFICATION_SUCCESS);
        $this->assertEquals("warning", NotificationInterface::NOTIFICATION_WARNING);
    }
}
