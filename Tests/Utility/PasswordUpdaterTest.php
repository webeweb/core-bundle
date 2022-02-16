<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Utility;

use Exception;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdater;

/**
 * Password updater test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class PasswordUpdaterTest extends AbstractTestCase {

    /**
     * Tests hashPassword()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHashPassword(): void {

        // Set a Password encoder mock.
        $passwordEncoder = $this->getMockBuilder(PasswordEncoderInterface::class)->getMock();
        $passwordEncoder->expects($this->any())->method("encodePassword")->willReturn("encodePassword");

        // Set the Encoder factory mock.
        $this->encoderFactory->expects($this->any())->method("getEncoder")->willReturn($passwordEncoder);

        // Set an User mock.
        $user = new TestUser();
        $user->setPlainPassword("plainPassword");

        $obj = new PasswordUpdater($this->encoderFactory);

        $obj->hashPassword($user);
        $this->assertNull($user->getPlainPassword());
        $this->assertNotNull($user->getSalt());
        $this->assertNotNull($user->getPassword());
    }

    /**
     * Tests hashPassword()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHashPasswordWithBCryptPasswordEncoder(): void {

        // Set a Password encoder mock.
        $passwordEncoder = $this->getMockBuilder(BCryptPasswordEncoder::class)->disableOriginalConstructor()->getMock();
        $passwordEncoder->expects($this->any())->method("encodePassword")->willReturn("encodePassword");

        // Set the Encoder factory mock.
        $this->encoderFactory->expects($this->any())->method("getEncoder")->willReturn($passwordEncoder);

        // Set an User mock.
        $user = new TestUser();
        $user->setPlainPassword("plainPassword");

        $obj = new PasswordUpdater($this->encoderFactory);

        $obj->hashPassword($user);
        $this->assertNull($user->getPlainPassword());
        $this->assertNull($user->getSalt());
        $this->assertNotNull($user->getPassword());
    }

    /**
     * Tests hashPassword()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHashPasswordWithEmptyPassword(): void {

        // Set an User mock.
        $user = new TestUser();

        $obj = new PasswordUpdater($this->encoderFactory);

        $obj->hashPassword($user);
        $this->assertNull($user->getPlainPassword());
        $this->assertNull($user->getSalt());
        $this->assertNull($user->getPassword());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.utility.password_updater.default", PasswordUpdater::SERVICE_NAME);

        $obj = new PasswordUpdater($this->encoderFactory);

        $this->assertSame($this->encoderFactory, $obj->getEncoderFactory());
    }
}
