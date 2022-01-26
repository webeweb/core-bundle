<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Model\Group;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestGroupManager;

/**
 * Group manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class GroupManagerTest extends AbstractTestCase {

    /**
     * Tests the createGroup() method.
     *
     * @return void
     */
    public function testCreateGroup(): void {

        $obj = new TestGroupManager();

        $res = $obj->createGroup("test");
        $this->assertInstanceOf(Group::class, $res);

        $this->assertEquals("test", $res->getName());
    }

    /**
     * Tests the findGroupByName() method.
     *
     * @rteurn void
     */
    public function testFindGroupByName(): void {

        $obj = new TestGroupManager();

        $this->assertNull($obj->findGroupByName("test"));
    }
}
