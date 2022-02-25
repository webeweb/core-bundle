<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Routing;

use WBW\Bundle\CoreBundle\Component\Routing\RouterTrait;

/**
 * Test router trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Routing
 */
class TestRouterTrait {

    use RouterTrait {
        setRouter as public;
    }
}
