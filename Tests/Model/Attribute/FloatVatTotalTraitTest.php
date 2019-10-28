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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatVatTotalTrait;

/**
 * Float VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatVatTotalTrait();

        $this->assertNull($obj->getVatTotal());
    }

    /**
     * Tests the setVatTotal() method.
     *
     * @return void
     */
    public function testSetVatTotal() {

        $obj = new TestFloatVatTotalTrait();

        $obj->setVatTotal(1.01);
        $this->assertEquals(1.01, $obj->getVatTotal());
    }
}
