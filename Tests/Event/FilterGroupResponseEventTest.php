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
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\CoreBundle\Event\FilterGroupResponseEvent;
use WBW\Bundle\CoreBundle\Model\GroupInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Filter group response event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class FilterGroupResponseEventTest extends AbstractTestCase {

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

        // Set a Response mock.
        $response = new Response();

        $obj = new FilterGroupResponseEvent($group, $request, $response);

        $this->assertEquals("WBW\\Bundle\\CoreBundle\\Event\\FilterGroupResponseEvent", $obj->getEventName());
        $this->assertSame($group, $obj->getGroup());
        $this->assertSame($request, $obj->getRequest());
        $this->assertSame($response, $obj->getResponse());
    }
}
