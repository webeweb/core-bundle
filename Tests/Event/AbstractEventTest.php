<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Event;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Event\TestEvent;

/**
 * Abstract event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class AbstractEventTest extends AbstractTestCase {

    /**
     * Test __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestEvent("eventName");

        $this->assertEquals("eventName", $obj->getEventName());
    }
}
