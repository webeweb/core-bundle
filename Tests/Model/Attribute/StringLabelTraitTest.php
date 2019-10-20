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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringLabelTrait;

/**
 * String label trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringLabelTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringLabelTrait();

        $this->assertNull($obj->getLabel());
    }

    /**
     * Tests the setLabel() method.
     *
     * @return void
     */
    public function testSetLabel() {

        $obj = new TestStringLabelTrait();

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }
}
