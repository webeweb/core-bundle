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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatExcludingVatPriceTrait;

/**
 * Float excluding VAT price trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatExcludingVatPriceTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatExcludingVatPriceTrait();

        $this->assertNull($obj->getExcludingVatPrice());
    }

    /**
     * Tests the setExcludingVatPrice() method.
     *
     * @return void
     */
    public function testSetExcludingVatPrice() {

        $obj = new TestFloatExcludingVatPriceTrait();

        $obj->setExcludingVatPrice(1.01);
        $this->assertEquals(1.01, $obj->getExcludingVatPrice());
    }
}
