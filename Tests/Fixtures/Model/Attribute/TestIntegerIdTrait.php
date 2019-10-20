<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute;

use WBW\Bundle\CoreBundle\Model\Attribute\IntegerIdTrait;

/**
 * Test integer id trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute
 */
class TestIntegerIdTrait {

    use IntegerIdTrait;

    /**
     * Set the id.
     *
     * @param int $id The id.
     * @return TestIntegerIdTrait Returns this test integer id trait.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
