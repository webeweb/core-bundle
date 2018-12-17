<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Symfony\Component\Security\Core\User\User;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * User helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class UserHelperTest extends AbstractTestCase {

    /**
     * Tests the hasRoles() method.
     *
     * @return void
     */
    public function testHasRoles() {

        $arg = new User("github", "github", ["ROLE_USER"]);

        $this->assertFalse(UserHelper::hasRoles(null, ""));
        $this->assertFalse(UserHelper::hasRoles(null, null));
        $this->assertFalse(UserHelper::hasRoles("", null));
        $this->assertFalse(UserHelper::hasRoles("", ""));

        $this->assertFalse(UserHelper::hasRoles($arg, "ROLE_SUPER_ADMIN"));
        $this->assertFalse(UserHelper::hasRoles($arg, "ROLE_SUPER_ADMIN", false));

        $this->assertTrue(UserHelper::hasRoles($arg, "ROLE_USER"));
        $this->assertTrue(UserHelper::hasRoles($arg, "ROLE_USER", false));

        $this->assertFalse(UserHelper::hasRoles($arg, "ROLE_GITHUB"));
        $this->assertFalse(UserHelper::hasRoles($arg, "ROLE_GITHUB", false));

        $this->assertTrue(UserHelper::hasRoles($arg, ["ROLE_SUPER_ADMIN", "ROLE_USER"]));
        $this->assertFalse(UserHelper::hasRoles($arg, ["ROLE_SUPER_ADMIN", "ROLE_USER"], false));

        $this->assertFalse(UserHelper::hasRoles($arg, ["ROLE_SUPER_ADMIN", "ROLE_GITHUB"]));
        $this->assertFalse(UserHelper::hasRoles($arg, ["ROLE_SUPER_ADMIN", "ROLE_GITHUB"], false));
    }

}
