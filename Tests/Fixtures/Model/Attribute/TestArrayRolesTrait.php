<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute;

use WBW\Bundle\CoreBundle\Model\Attribute\ArrayRolesTrait;

/**
 * Test array roles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute
 */
class TestArrayRolesTrait {

    use ArrayRolesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRoles([]);
    }
}