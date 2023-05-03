<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Security\Core\User;

use WBW\Bundle\CoreBundle\Security\Core\User\UserHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

/**
 * User helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Security\Core\User
 */
class UserHelperTest extends AbstractTestCase {

    /**
     * Test hasRoles()
     *
     * @return void
     */
    public function testHasRoles(): void {

        // Set a User mock.
        $user = new TestUser("github", "github", ["ROLE_USER"]);

        $this->assertFalse(UserHelper::hasRoles(null, ""));
        $this->assertFalse(UserHelper::hasRoles(null, null));
        $this->assertFalse(UserHelper::hasRoles("", null));
        $this->assertFalse(UserHelper::hasRoles("", ""));

        $this->assertFalse(UserHelper::hasRoles($user, "ROLE_SUPER_ADMIN"));
        $this->assertFalse(UserHelper::hasRoles($user, "ROLE_SUPER_ADMIN", false));

        $this->assertTrue(UserHelper::hasRoles($user, "ROLE_USER"));
        $this->assertTrue(UserHelper::hasRoles($user, "ROLE_USER", false));

        $this->assertFalse(UserHelper::hasRoles($user, "ROLE_GITHUB"));
        $this->assertFalse(UserHelper::hasRoles($user, "ROLE_GITHUB", false));

        $this->assertTrue(UserHelper::hasRoles($user, ["ROLE_SUPER_ADMIN", "ROLE_USER"]));
        $this->assertFalse(UserHelper::hasRoles($user, ["ROLE_SUPER_ADMIN", "ROLE_USER"], false));

        $this->assertFalse(UserHelper::hasRoles($user, ["ROLE_SUPER_ADMIN", "ROLE_GITHUB"]));
        $this->assertFalse(UserHelper::hasRoles($user, ["ROLE_SUPER_ADMIN", "ROLE_GITHUB"], false));
    }
}
