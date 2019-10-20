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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringPathnameTrait;

/**
 * String pathname trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringPathnameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringPathnameTrait();

        $this->assertNull($obj->getPathname());
    }

    /**
     * Tests the setPathname() method.
     *
     * @return void
     */
    public function testSetPathname() {

        $obj = new TestStringPathnameTrait();

        $obj->setPathname("pathname");
        $this->assertEquals("pathname", $obj->getPathname());
    }
}
