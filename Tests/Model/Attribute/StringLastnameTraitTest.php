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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringLastnameTrait;

/**
 * String lastname trait test.
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

        $obj = new TestStringLastnameTrait();

        $this->assertNull($obj->getLastname());
    }

    /**
     * Tests the setLastname() method.
     *
     * @return void
     */
    public function testSetLastname() {

        $obj = new TestStringLastnameTrait();

        $obj->setLastname("lastname");
        $this->assertEquals("lastname", $obj->getLastname());
    }
}
