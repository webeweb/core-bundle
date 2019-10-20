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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringSourceTrait;

/**
 * String source trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringSourceTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringSourceTrait();

        $this->assertNull($obj->getSource());
    }

    /**
     * Tests the setSource() method.
     *
     * @return void
     */
    public function testSetSource() {

        $obj = new TestStringSourceTrait();

        $obj->setSource("source");
        $this->assertEquals("source", $obj->getSource());
    }
}
