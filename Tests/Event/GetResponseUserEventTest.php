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
use WBW\Bundle\CoreBundle\Event\GetResponseUserEvent;
use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Get response user event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class GetResponseUserEventTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        // Set a User mock.
        $user = $this->getMockBuilder(UserInterface::class)->getMock();

        // Set a Request mock.
        $request = new Request();

        $obj = new GetResponseUserEvent($user, $request);

        $this->assertEquals("WBW\\Bundle\\CoreBundle\\Event\\GetResponseUserEvent", $obj->getEventName());
        $this->assertSame($user, $obj->getUser());
        $this->assertSame($request, $obj->getRequest());
    }
}
