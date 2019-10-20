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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringReferenceTrait;

/**
 * String reference trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringReferenceTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringReferenceTrait();

        $this->assertNull($obj->getReference());
    }

    /**
     * Tests the setReference() method.
     *
     * @return void
     */
    public function testSetReference() {

        $obj = new TestStringReferenceTrait();

        $obj->setReference("reference");
        $this->assertEquals("reference", $obj->getReference());
    }
}
