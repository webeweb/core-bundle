<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Security\Core\User;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Core\User\TestUserTrait;

/**
 * User trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Security\Core\User
 */
class UserTraitTest extends AbstractTestCase {

    /**
     * Tests setUser()
     *
     * @return void
     */
    public function testSetUser(): void {

        $obj = new TestUserTrait();

        $obj->setUser($this->user);
        $this->assertSame($this->user, $obj->getUser());
    }
}
