<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model;

use WBW\Bundle\CoreBundle\Model\OriginUrlTrait;

/**
 * Test origin URL trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model
 */
class TestOriginUrlTrait {

    use OriginUrlTrait {
        setOriginUrl as public;
    }
}
