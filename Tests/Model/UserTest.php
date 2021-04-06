<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use DateTime;
use Doctrine\Common\Collections\Collection;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;
use WBW\Bundle\CoreBundle\Model\FosUserInterface;
use WBW\Bundle\CoreBundle\Model\GroupableInterface;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\FOSUser;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

/**
 * User test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class UserTest extends TestCase {

    /**
     * Tests the eraseCredentials() method.
     *
     * @return void
     */
    public function testEraseCredentials(): void {

        $obj = new TestUser();
        $obj->setPlainPassword("password");

        $obj->eraseCredentials();
        $this->assertNull($obj->getPlainPassword());
    }

    /**
     * Tests the isAccountNonExpired() method.
     *
     * @return void
     */
    public function testIsAccountNonExpired(): void {

        $obj = new TestUser();

        $this->assertTrue($obj->isAccountNonExpired());
    }

    /**
     * Tests the isAccountNonLocked() method.
     *
     * @return void
     */
    public function testIsAccountNonLocked(): void {

        $obj = new TestUser();

        $this->assertTrue($obj->isAccountNonLocked());
    }

    /**
     * Tests the isCredentialsNonExpired() method.
     *
     * @return void
     */
    public function testIsCredentialsNonExpired(): void {

        $obj = new TestUser();

        $this->assertTrue($obj->isCredentialsNonExpired());
    }

    /**
     * Tests the isEnabled() method.
     *
     * @return void
     */
    public function testIsEnabled(): void {

        $obj = new TestUser();

        $obj->setEnabled(true);
        $this->assertTrue($obj->isEnabled());
    }

    /**
     * Tests the isEqualTo() method.
     *
     * @return void
     */
    public function testIsEqualTo(): void {

        // Set an User mock.
        $user = new TestUser();

        $obj = new TestUser();
        $obj->setPassword("password");
        $obj->setSalt("salt");
        $obj->setUsername("username");

        $this->assertFalse($obj->isEqualTo(new FOSUser()));
        $this->assertFalse($obj->isEqualTo($user));
        $this->assertFalse($obj->isEqualTo($user->setPassword("password")));
        $this->assertFalse($obj->isEqualTo($user->setSalt("salt")));
        $this->assertTrue($obj->isEqualTo($user->setUsername("username")));
    }

    /**
     * Tests the isPasswordRequestNonExpired() method.
     *
     * @return void
     */
    public function testIsPasswordRequestNonExpired(): void {

        $obj = new TestUser();
        $obj->setPasswordRequestedAt(new DateTime());

        $this->assertTrue($obj->isPasswordRequestNonExpired(3600));
        $this->assertFalse($obj->isPasswordRequestNonExpired(-3600));
    }

    /**
     * Tests the isSuperAdmin() method.
     *
     * @return void
     */
    public function testIsSuperAdmin(): void {

        $obj = new TestUser();

        $obj->addRole(User::ROLE_SUPER_ADMIN);
        $this->assertTrue($obj->isSuperAdmin());
    }

    /**
     * Tests the set() method.
     *
     * @return void
     */
    public function testSerialize(): void {

        $obj = new TestUser();
        $obj->setPassword("password");
        $obj->setSalt("salt");
        $obj->setUsernameCanonical("usernameCanonical");
        $obj->setUsername("username");
        $obj->setEnabled(true);
        //$obj->setId(null);
        $obj->setEmail("email");
        $obj->setEmailCanonical("emailCanonical");

        $exp = 'a:8:{i:0;s:8:"password";i:1;s:4:"salt";i:2;s:17:"usernameCanonical";i:3;s:8:"username";i:4;b:1;i:5;N;i:6;s:5:"email";i:7;s:14:"emailCanonical";}';
        $this->assertEquals($exp, $obj->serialize());
    }

    /**
     * Tests the setConfirmationToken() method.
     *
     * @return void
     */
    public function testSetConfirmationToken(): void {

        $obj = new TestUser();

        $obj->setConfirmationToken("confirmationToken");
        $this->assertEquals("confirmationToken", $obj->getConfirmationToken());
    }

    /**
     * Tests the setEmailCanonical() method.
     *
     * @return void
     */
    public function testSetEmailCanonical(): void {

        $obj = new TestUser();

        $obj->setEmailCanonical("emailCanonical");
        $this->assertEquals("emailCanonical", $obj->getEmailCanonical());
    }

    /**
     * Tests the setLastLogin() method.
     *
     * @return void
     */
    public function testSetLastLogin(): void {

        // Set a Last login mock.
        $lastLogin = new DateTime();

        $obj = new TestUser();

        $obj->setLastLogin($lastLogin);
        $this->assertSame($lastLogin, $obj->getLastLogin());
    }

    /**
     * Tests the setPasswordRequestedAt() method.
     *
     * @return void
     */
    public function testSetPasswordRequestedAt(): void {

        // Set a Password requested at mock.
        $passwordRequestedAt = new DateTime();

        $obj = new TestUser();

        $obj->setPasswordRequestedAt($passwordRequestedAt);
        $this->assertSame($passwordRequestedAt, $obj->getPasswordRequestedAt());
    }

    /**
     * Tests the setPlainPassword() method.
     *
     * @return void
     */
    public function testSetPlainPassword(): void {

        $obj = new TestUser();

        $obj->setPlainPassword("plainPassword");
        $this->assertEquals("plainPassword", $obj->getPlainPassword());
    }

    /**
     * Tests the setSalt() method.
     *
     * @return void
     */
    public function testSetSalt(): void {

        $obj = new TestUser();

        $obj->setSalt("salt");
        $this->assertEquals("salt", $obj->getSalt());
    }

    /**
     * Tests the setSuperAdmin() method.
     *
     * @return void
     */
    public function testSetSuperAdmin(): void {

        $obj = new TestUser();

        $obj->setSuperAdmin(false);
        $this->assertEquals([User::ROLE_DEFAULT], $obj->getRoles());

        $obj->setSuperAdmin(true);
        $this->assertEquals([User::ROLE_SUPER_ADMIN, User::ROLE_DEFAULT], $obj->getRoles());
    }

    /**
     * Tests the setUsernameCanonical() method.
     *
     * @return void
     */
    public function testSetUsernameCanonical(): void {

        $obj = new TestUser();

        $obj->setUsernameCanonical("usernameCanonical");
        $this->assertEquals("usernameCanonical", $obj->getUsernameCanonical());
    }

    /**
     * Tests the unserialize() method.
     *
     * @return void
     */
    public function testUnserialize(): void {

        // Set a serialize mock.
        $arg = 'a:8:{i:0;s:8:"password";i:1;s:4:"salt";i:2;s:17:"usernameCanonical";i:3;s:8:"username";i:4;b:1;i:5;N;i:6;s:5:"email";i:7;s:14:"emailCanonical";}';

        $obj = new TestUser();

        $obj->unserialize($arg);
        $this->assertEquals("password", $obj->getPassword());
        $this->assertEquals("salt", $obj->getSalt());
        $this->assertEquals("usernameCanonical", $obj->getUsernameCanonical());
        $this->assertEquals("username", $obj->getUsername());
        $this->assertTrue($obj->getEnabled());
        $this->assertNull($obj->getId());
        $this->assertEquals("email", $obj->getEmail());
        $this->assertEquals("emailCanonical", $obj->getEmailCanonical());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestUser();

        $this->assertInstanceOf(BaseUserInterface::class, $obj);
        $this->assertInstanceOf(FosUserInterface::class, $obj);
        $this->assertInstanceOf(UserInterface::class, $obj);
        $this->assertInstanceOf(GroupableInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getEmail());
        $this->assertFalse($obj->getEnabled());
        $this->assertInstanceOf(Collection::class, $obj->getGroups());
        $this->assertNull($obj->getPassword());
        $this->assertEquals([User::ROLE_DEFAULT], $obj->getRoles());
        $this->assertNull($obj->getUsername());

        $this->assertNull($obj->getConfirmationToken());
        $this->assertNull($obj->getEmailCanonical());
        $this->assertInstanceOf(Collection::class, $obj->getGroups());
        $this->assertNull($obj->getLastLogin());
        $this->assertNull($obj->getPasswordRequestedAt());
        $this->assertNull($obj->getPlainPassword());
        $this->assertNull($obj->getSalt());
        $this->assertNull($obj->getUsernameCanonical());
        $this->assertTrue($obj->isAccountNonExpired());
        $this->assertTrue($obj->isAccountNonLocked());
        $this->assertTrue($obj->isCredentialsNonExpired());
        $this->assertFalse($obj->isEnabled());
        $this->assertFalse($obj->isSuperAdmin());
    }

    /**
     * Tests the __toString() method.
     *
     * @return void
     */
    public function test__toString(): void {

        $obj = new TestUser();

        $this->assertNull($obj->__toString());

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->__toString());
    }
}
