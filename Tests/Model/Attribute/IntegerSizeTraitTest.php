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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestIntegerSizeTrait;

/**
 * Integer size trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class IntegerSizeTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerSizeTrait();

        $this->assertNull($obj->getSize());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new TestIntegerSizeTrait();

        $obj->setSize(1);
        $this->assertEquals(1, $obj->getSize());
    }
}