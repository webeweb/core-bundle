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

use WBW\Bundle\CoreBundle\Manager\GroupManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestGroupManagerTrait;

/**
 * Group manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class GroupManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setGroupManager()
     *
     * @return void
     */
    public function testSetGroupManager(): void {

        // Set an Group manager mock.
        $groupManager = $this->getMockBuilder(GroupManagerInterface::class)->getMock();

        $obj = new TestGroupManagerTrait();

        $obj->setGroupManager($groupManager);
        $this->assertSame($groupManager, $obj->getGroupManager());
    }
}
