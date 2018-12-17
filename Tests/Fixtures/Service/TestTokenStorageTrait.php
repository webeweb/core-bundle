<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Service;

use WBW\Bundle\CoreBundle\Service\TokenStorageTrait;

/**
 * Test token storage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Service
 */
class TestTokenStorageTrait {

    use TokenStorageTrait {
        setTokenStorage as public;
    }
}
