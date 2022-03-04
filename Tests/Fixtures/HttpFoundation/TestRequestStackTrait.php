<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\HttpFoundation;

use WBW\Bundle\CoreBundle\HttpFoundation\RequestStackTrait;

/**
 * Test request stack trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\HttpFoundation
 */
class TestRequestStackTrait {

    use RequestStackTrait {
        setRequestStack as public;
    }
}
