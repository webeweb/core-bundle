<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset;

use WBW\Bundle\CoreBundle\Manager\Asset\ColorManagerTrait;

/**
 * Test color manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset
 */
class TestColorManagerTrait {

    use ColorManagerTrait {
        setColorManager as public;
    }
}
