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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringAccountingCodeTrait;

/**
 * String accounting code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringAccountingCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringAccountingCodeTrait();

        $this->assertNull($obj->getAccountingCode());
    }

    /**
     * Tests the setAccountingCode() method.
     *
     * @return void
     */
    public function testSetAccountingCode() {

        $obj = new TestStringAccountingCodeTrait();

        $obj->setAccountingCode("accountingCode");
        $this->assertEquals("accountingCode", $obj->getAccountingCode());
    }
}
