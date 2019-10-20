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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringFirstnameTrait;

/**
 * String firstname trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringFirstnameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringFirstnameTrait();

        $this->assertNull($obj->getFirstname());
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname() {

        $obj = new TestStringFirstnameTrait();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }
}
