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

use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

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

        // Set a User mock.
        $user = new TestUser("username");

        $this->assertEquals("username", UserHelper::getIdentifier($user));
    }
}
