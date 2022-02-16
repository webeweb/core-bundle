<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestCollectionGroupsTrait;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestGroup;

/**
 * Collection groups trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class CollectionGroupsTraitTest extends AbstractTestCase {

    /**
     * Tests addGroup()
     *
     * @return void
     */
    public function testAddGroup(): void {

        // Set a Group mock.
        $group = new TestGroup("name");

        $obj = new TestCollectionGroupsTrait();

        $obj->addGroup($group);
        $this->assertSame($group, $obj->getGroups()[0]);
    }

    /**
     * Tests hasGroup()
     *
     * @return void
     */
    public function testHasGroup(): void {

        // Set a Group mock.
        $group = new TestGroup("name");

        $obj = new TestCollectionGroupsTrait();
        $obj->addGroup($group);

        $this->assertTrue($obj->hasGroup("name"));
        $this->assertFalse($obj->hasGroup(""));
    }

    /**
     * Tests removeGroup()
     *
     * @return void
     */
    public function testRemoveGroup(): void {

        // Set a Group mock.
        $group = new TestGroup("name");

        $obj = new TestCollectionGroupsTrait();
        $obj->addGroup($group);

        $obj->removeGroup($group);
        $this->assertCount(0, $obj->getGroups());
    }
}
