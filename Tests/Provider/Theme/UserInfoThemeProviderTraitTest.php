<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\UserInfoThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestUserInfoThemeProviderTrait;

/**
 * User info theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Theme
 */
class UserInfoThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setUserInfoThemeProvider() method.
     *
     * @return void
     */
    public function testSetUserInfoThemeProvider(): void {

        // Set an User info theme provider mock.
        $userInfoThemeProvider = $this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock();

        $obj = new TestUserInfoThemeProviderTrait();

        $obj->setUserInfoThemeProvider($userInfoThemeProvider);
        $this->assertSame($userInfoThemeProvider, $obj->getUserInfoThemeProvider());
    }
}
