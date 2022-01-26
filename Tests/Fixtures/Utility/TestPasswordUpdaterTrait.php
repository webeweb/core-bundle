<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Utility;

use WBW\Bundle\CoreBundle\Utility\PasswordUpdaterTrait;

/**
 * Test password updater trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Utility
 */
class TestPasswordUpdaterTrait {

    use PasswordUpdaterTrait {
        setPasswordUpdater as public;
    }
}
