<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\UserInfoThemeProviderTrait;

/**
 * Test user info theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme
 */
class TestUserInfoThemeProviderTrait {

    use UserInfoThemeProviderTrait {
        setUserInfoThemeProvider as public;
    }
}
