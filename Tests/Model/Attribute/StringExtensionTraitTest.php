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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringExtensionTrait;

/**
 * String extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringExtensionTrait();

        $this->assertNull($obj->getExtension());
    }

    /**
     * Tests the setExtension() method.
     *
     * @return void
     */
    public function testSetExtension() {

        $obj = new TestStringExtensionTrait();

        $obj->setExtension("extension");
        $this->assertEquals("extension", $obj->getExtension());
    }
}
