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

use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestUserManagerTrait;

/**
 * User manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class UserManagerTraitTest extends AbstractTestCase {

    /**
     * Tests the setUserManager() method.
     *
     * @return void
     */
    public function testSetUserManager(): void {

        // Set an User manager mock.
        $userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();

        $obj = new TestUserManagerTrait();

        $obj->setUserManager($userManager);
        $this->assertSame($userManager, $obj->getUserManager());
    }
}
