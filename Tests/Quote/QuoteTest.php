<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Quote;

use DateTime;
use Exception;
use WBW\Bundle\CoreBundle\Quote\Quote;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Quote
 */
class QuoteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Quote();

        $this->assertNull($obj->getAuthor());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDate());
    }

    /**
     * Tests the setAuthor() method.
     *
     * @return void
     */
    public function testSetAuthor() {

        $obj = new Quote();

        $obj->setAuthor("author");
        $this->assertEquals("author", $obj->getAuthor());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent() {

        $obj = new Quote();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date mock.
        $date = new DateTime();

        $obj = new Quote();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }
}
