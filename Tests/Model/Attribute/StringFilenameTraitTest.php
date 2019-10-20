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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringFilenameTrait;

/**
 * String filename trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringFilenameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringFilenameTrait();

        $this->assertNull($obj->getFilename());
    }

    /**
     * Tests the setFilename() method.
     *
     * @return void
     */
    public function testSetFilename() {

        $obj = new TestStringFilenameTrait();

        $obj->setFilename("filename");
        $this->assertEquals("filename", $obj->getFilename());
    }
}
