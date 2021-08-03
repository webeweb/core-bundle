<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Quote;

use WBW\Bundle\CoreBundle\Asset\Quote\Quote;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Quote
 */
class QuoteTest extends AbstractTestCase {

    /**
     * Tests the setAuthor() method.
     *
     * @return void
     */
    public function testSetAuthor(): void {

        $obj = new Quote();

        $obj->setAuthor("author");
        $this->assertEquals("author", $obj->getAuthor());
    }

    /**
     * Tests the setSaint() method.
     *
     * @return void
     */
    public function testSetSaint(): void {

        $obj = new Quote();

        $obj->setSaint("saint");
        $this->assertEquals("saint", $obj->getSaint());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Quote();

        $this->assertNull($obj->getAuthor());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getSaint());
    }
}
