<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Helper;

use WBW\Bundle\CoreBundle\Helper\PhantomJSHelperTrait;

/**
 * Test PhantomJS helper trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Helper
 */
class TestPhantomJSHelperTrait {

    use PhantomJSHelperTrait {
        setPhantomJSHelper as public;
    }
}
