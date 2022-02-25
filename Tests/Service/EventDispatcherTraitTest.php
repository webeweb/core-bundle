<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestEventDispatcherTrait;

/**
 * Event dispatcher trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class EventDispatcherTraitTest extends AbstractTestCase {

    /**
     * Tests setEventDispatcher()
     *
     * @return void
     */
    public function testSetEventDispatcher(): void {

        $obj = new TestEventDispatcherTrait();

        $obj->setEventDispatcher($this->eventDispatcher);
        $this->assertSame($this->eventDispatcher, $obj->getEventDispatcher());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestEventDispatcherTrait();

        $this->assertNull($obj->getEventDispatcher());
    }
}
