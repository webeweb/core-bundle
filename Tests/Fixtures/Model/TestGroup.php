<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model;

use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Test group.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model
 */
class TestGroup {

    use IntegerIdTrait;
    use StringNameTrait;
}
