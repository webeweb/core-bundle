<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Color;

use WBW\Bundle\CoreBundle\Color\RedColorProviderTrait;

/**
 * Test red color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Color
 */
class TestRedColorProviderTrait {

    use RedColorProviderTrait {
        setRedColorProvider as public;
    }
}
