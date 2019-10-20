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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatQuantityTrait;

/**
 * Float quantity trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatQuantityTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatQuantityTrait();

        $this->assertNull($obj->getQuantity());
    }

    /**
     * Tests the setQuantity() method.
     *
     * @return void
     */
    public function testSetQuantity() {

        $obj = new TestFloatQuantityTrait();

        $obj->setQuantity(1.01);
        $this->assertEquals(1.01, $obj->getQuantity());
    }
}
