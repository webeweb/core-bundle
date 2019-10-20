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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatExcludingVatTotalTrait;

/**
 * Float excluding VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatExcludingVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatExcludingVatTotalTrait();

        $this->assertNull($obj->getExcludingVatTotal());
    }

    /**
     * Tests the setExcludingVatTotal() method.
     *
     * @return void
     */
    public function testSetExcludingVatTotal() {

        $obj = new TestFloatExcludingVatTotalTrait();

        $obj->setExcludingVatTotal(1.01);
        $this->assertEquals(1.01, $obj->getExcludingVatTotal());
    }
}
