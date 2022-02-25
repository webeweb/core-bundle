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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestArrayRolesTrait;

/**
 * Array roles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class ArrayRolesTraitTest extends AbstractTestCase {

    /**
     * Tests addRole()
     *
     * @return void
     */
    public function testAddRole(): void {

        $obj = new TestArrayRolesTrait();

        $obj->addRole("role");
        $this->assertEquals(["ROLE"], $obj->getRoles());
    }

    /**
     * Tests hasRole()
     *
     * @return void
     */
    public function testHasRole(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("role");

        $this->assertTrue($obj->hasRole("ROLE"));
        $this->assertTrue($obj->hasRole("role"));
        $this->assertFalse($obj->hasRole(""));
    }

    /**
     * Tests removeRole()
     *
     * @return void
     */
    public function testRemoveRole(): void {

        $obj = new TestArrayRolesTrait();
        $obj->addRole("role");

        $obj->removeRole("role");
        $this->assertEquals([], $obj->getRoles());
    }

    /**
     * Tests setRoles()
     *
     * @return void
     */
    public function testSetRoles(): void {

        $arg = ["ROLE_SUPER_ADMIN", "ROLE_ADMN", "ROLE_USER"];

        $obj = new TestArrayRolesTrait();

        $obj->setRoles($arg);
        $this->assertEquals($arg, $obj->getRoles());
    }
}
