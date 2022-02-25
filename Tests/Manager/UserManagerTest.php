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

use Exception;
use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestUserManager;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdaterInterface;

/**
 * User manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class UserManagerTest extends AbstractTestCase {

    /**
     * Canonical fields updater.
     *
     * @var CanonicalFieldsUpdater
     */
    private $canonicalFieldsUpdater;

    /**
     * Password updater.
     *
     * @var PasswordUpdaterInterface
     */
    private $passwordUpdater;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Canonical fields updater mock.
        $this->canonicalFieldsUpdater = $this->getMockBuilder(CanonicalFieldsUpdater::class)->disableOriginalConstructor()->getMock();

        // Set a Password updater mock.
        $this->passwordUpdater = $this->getMockBuilder(PasswordUpdaterInterface::class)->getMock();
    }

    /**
     * Tests createUser()
     *
     * @return void
     */
    public function testCreateUser(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertInstanceOf(UserInterface::class, $obj->createUser());
    }

    /**
     * Tests findUserByConfirmationToken()
     *
     * @return void
     */
    public function testFindUserByConfirmationToken(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->findUserByConfirmationToken("confirmationToken"));
    }

    /**
     * Tests findUserByEmail()
     *
     * @return void
     */
    public function testFindUserByEmail(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->findUserByEmail("email"));
    }

    /**
     * Tests findUserByUsername()
     *
     * @return void
     */
    public function testFindUserByUsername(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->findUserByUsername("username"));
    }

    /**
     * Tests findUserByUsernameOrEmail()
     *
     * @return void
     */
    public function testFindUserByUsernameOrEmail(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->findUserByUsernameOrEmail("username@domain.tld"));
        $this->assertNull($obj->findUserByUsernameOrEmail("username"));
    }

    /**
     * Tests updateCanonicalFields()
     *
     * @return void
     */
    public function testUpdateCanonicalFields(): void {

        // Set an User mock.
        $user = $this->getMockBuilder(UserInterface::class)->getMock();

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->updateCanonicalFields($user));
    }

    /**
     * Tests updatePassword()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUpdatePassword(): void {

        // Set an User mock.
        $user = $this->getMockBuilder(UserInterface::class)->getMock();

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertNull($obj->updatePassword($user));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestUserManager($this->passwordUpdater, $this->canonicalFieldsUpdater);

        $this->assertSame($this->canonicalFieldsUpdater, $obj->getCanonicalFieldsUpdater());
        $this->assertSame($this->passwordUpdater, $obj->getPasswordUpdater());
    }
}
