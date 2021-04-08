<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Doctrine\Common\Persistence;

use WBW\Bundle\CoreBundle\Doctrine\Common\Persistence\ObjectManagerTrait;

/**
 * Test object manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Doctrine\Common\Persistence
 */
class TestObjectManagerTrait {

    use ObjectManagerTrait {
        setObjectManager as public;
    }
}