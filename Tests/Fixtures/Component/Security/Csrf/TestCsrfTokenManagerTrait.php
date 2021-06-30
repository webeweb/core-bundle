<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Csrf;

use WBW\Bundle\CoreBundle\Component\Security\Csrf\CsrfTokenManagerTrait;

/**
 * Test CSRF token manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Csrf
 */
class TestCsrfTokenManagerTrait {

    use CsrfTokenManagerTrait {
        setCsrfTokenManager as public;
    }
}
