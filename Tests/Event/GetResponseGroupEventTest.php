<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Event;

use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\CoreBundle\Event\GetResponseGroupEvent;
use WBW\Bundle\CoreBundle\Model\GroupInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Get response group event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class GetResponseGroupEventTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        // Set a Group mock.
        $group = $this->getMockBuilder(GroupInterface::class)->getMock();

        // Set a Request mock.
        $request = new Request();

        $obj = new GetResponseGroupEvent($group, $request);

        $this->assertEquals("WBW\\Bundle\\CoreBundle\\Event\\GetResponseGroupEvent", $obj->getEventName());
        $this->assertSame($group, $obj->getGroup());
        $this->assertSame($request, $obj->getRequest());
    }
}
