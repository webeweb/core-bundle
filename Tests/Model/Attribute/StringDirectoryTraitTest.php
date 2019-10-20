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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringDirectoryTrait;

/**
 * String directory trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringDirectoryTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringDirectoryTrait();

        $this->assertNull($obj->getDirectory());
    }

    /**
     * Tests the setDirectory() method.
     *
     * @return void
     */
    public function testSetDirectory() {

        $obj = new TestStringDirectoryTrait();

        $obj->setDirectory("directory");
        $this->assertEquals("directory", $obj->getDirectory());
    }
}
