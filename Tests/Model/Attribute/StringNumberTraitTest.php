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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringNumberTrait;

/**
 * String number trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringNumberTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringNumberTrait();

        $this->assertNull($obj->getNumber());
    }

    /**
     * Tests the setNumber() method.
     *
     * @return void
     */
    public function testSetNumber() {

        $obj = new TestStringNumberTrait();

        $obj->setNumber("number");
        $this->assertEquals("number", $obj->getNumber());
    }
}
