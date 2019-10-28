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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatVatAmountTrait;

/**
 * Float VAT amount trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatVatAmountTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatVatAmountTrait();

        $this->assertNull($obj->getVatAmount());
    }

    /**
     * Tests the setVatAmount() method.
     *
     * @return void
     */
    public function testSetVatAmount() {

        $obj = new TestFloatVatAmountTrait();

        $obj->setVatAmount(1.01);
        $this->assertEquals(1.01, $obj->getVatAmount());
    }
}
