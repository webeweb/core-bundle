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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringMimeTypeTrait;

/**
 * String mime type trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringMimeTypeTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringMimeTypeTrait();

        $this->assertNull($obj->getMimeType());
    }

    /**
     * Tests the setMimeType() method.
     *
     * @return void
     */
    public function testSetMimeType() {

        $obj = new TestStringMimeTypeTrait();

        $obj->setMimeType("mimeType");
        $this->assertEquals("mimeType", $obj->getMimeType());
    }
}