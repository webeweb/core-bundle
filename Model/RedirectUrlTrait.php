<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use WBW\Bundle\CoreBundle\Model\Attribute\StringRedirectUrlTrait;

/**
 * Redirect URL trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 * @deprecated since 2.15.0, use {@see WBW\Bundle\CoreBundle\Model\Attribute\StringRedirectUrlTrait} instead.
 */
trait RedirectUrlTrait {

    use StringRedirectUrlTrait;
}
