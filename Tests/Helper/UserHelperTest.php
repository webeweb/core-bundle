<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * User helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class UserHelperTest extends AbstractTestCase {

    /**
     * Tests getIdentifier()
     *
     * @return void
     */
    public function testGetIdentifier(): void {

        $identifier = "identifier";

        // Set a User mock.
        $user = $this->getMockBuilder(UserInterface::class)->getMock();
        if (Kernel::MAJOR_VERSION < 6) {
            $user->expects($this->any())->method("getUsername")->willReturn($identifier);
        } else {
            $user->expects($this->any())->method("getUserIdentifier")->willReturn($identifier);
        }

        $this->assertEquals($identifier, UserHelper::getIdentifier($user));
    }
}
