<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestIntegerMinimumTrait;

/**
 * Integer minimum trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class IntegerMinimumTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerMinimumTrait();

        $this->assertNull($obj->getMinimum());
    }

    /**
     * Tests the setMinimum() method.
     *
     * @return void
     */
    public function testSetMinimum() {

        $obj = new TestIntegerMinimumTrait();

        $obj->setMinimum(1);
        $this->assertEquals(1, $obj->getMinimum());
    }
}
