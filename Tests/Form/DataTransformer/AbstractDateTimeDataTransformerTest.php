<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\DataTransformer;

use DateTime;
use DateTimeZone;
use Exception;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Form\DataTransformer\TestDateTimeDataTransformer;

/**
 * Abstract date/time data transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer
 */
class AbstractDateTimeDataTransformerTest extends AbstractTestCase {

    /**
     * Tests the newDateTimeZone() method.
     *
     * @return void
     */
    public function testNewDateTimeZone(): void {

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $res = $obj->newDateTimeZone();
        $this->assertEquals("UTC", $res->getName());
    }

    /**
     * Tests the reverseTransform() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReverseTransform(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-03-23 19:00:00", new DateTimeZone("UTC"));

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $fmt = $obj->getFormat();
        $arg = $dateTime->format($fmt);

        $this->assertEquals(null, $obj->reverseTransform(null));
        $this->assertEquals(null, $obj->reverseTransform(""));
        $this->assertEquals(null, $obj->reverseTransform("exception"));
        $this->assertEquals($dateTime, $obj->reverseTransform($arg));
    }

    /**
     * Tests the setFormat() method.
     *
     * @return void
     */
    public function testSetFormat(): void {

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $obj->setFormat("format");
        $this->assertEquals("format", $obj->getFormat());
    }

    /**
     * Tests the setTimezone() method.
     *
     * @return void
     */
    public function testSetTimezone(): void {

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $obj->setTimezone("timezone");
        $this->assertEquals("timezone", $obj->getTimezone());
    }

    /**
     * Tests the transform() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testTransform(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-03-23 19:00:00", new DateTimeZone("UTC"));

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $fmt = $obj->getFormat();
        $exp = $dateTime->format($fmt);

        $this->assertEquals(null, $obj->transform(null));
        $this->assertEquals($exp, $obj->transform($dateTime));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestDateTimeDataTransformer("Y-m-d H:i:s", "UTC");

        $this->assertEquals("Y-m-d H:i:s", $obj->getFormat());
        $this->assertEquals("UTC", $obj->getTimezone());
    }
}