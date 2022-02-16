<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Exception;

use Symfony\Component\Security\Core\User\User;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Bad user role exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Exception
 */
class BadUserRoleExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $user        = new User("anonymous", "empty");
        $roles       = ["ROLE_ADMIN", "ROLE_USER"];
        $originUrl   = "https://github.com/webeweb";
        $redirectUrl = "https://github.com";

        $obj = new BadUserRoleException($user, $roles, $redirectUrl, $originUrl);

        $this->assertEquals('User "anonymous" is not allowed to access to "https://github.com/webeweb" with roles [ROLE_ADMIN,ROLE_USER]', $obj->getMessage());

        $this->assertEquals($originUrl, $obj->getOriginUrl());
        $this->assertEquals($redirectUrl, $obj->getRedirectUrl());
        $this->assertEquals($roles, $obj->getRoles());
        $this->assertSame($user, $obj->getUser());
    }
}
