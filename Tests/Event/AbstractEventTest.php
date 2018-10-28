<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Event;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Event\TestEvent;

/**
 * Abstract event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 * @final
 */
final class AbstractEventTest extends AbstractFrameworkTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestEvent("eventName");

        $this->assertEquals("eventName", $obj->getEventName());
    }

}
