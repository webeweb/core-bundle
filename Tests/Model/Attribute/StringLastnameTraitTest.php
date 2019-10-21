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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringLastNameTrait;

/**
 * String last name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringLastnameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringLastNameTrait();

        $this->assertNull($obj->getLastName());
    }

    /**
     * Tests the setLastName() method.
     *
     * @return void
     */
    public function testSetLastName() {

        $obj = new TestStringLastNameTrait();

        $obj->setLastName("lastname");
        $this->assertEquals("lastname", $obj->getLastName());
    }
}
