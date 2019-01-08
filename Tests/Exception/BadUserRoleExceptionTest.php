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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $user        = new User("anonymous", "empty");
        $roles       = ["ROLE_ADMIN", "ROLE_USER"];
        $originUrl   = "https://github.com/webeweb";
        $redirectUrl = "https://github.com";

        $ex = new BadUserRoleException($user, $roles, $redirectUrl, $originUrl);

        $res = "User \"anonymous\" is not allowed to access to \"https://github.com/webeweb\" with roles [ROLE_ADMIN,ROLE_USER]";
        $this->assertEquals($res, $ex->getMessage());

        $this->assertEquals($originUrl, $ex->getOriginUrl());
        $this->assertEquals($redirectUrl, $ex->getRedirectUrl());
        $this->assertEquals($roles, $ex->getRoles());
        $this->assertSame($user, $ex->getUser());
    }

}
