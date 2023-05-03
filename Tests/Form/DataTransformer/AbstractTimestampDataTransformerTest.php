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
use Throwable;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Form\DataTransformer\TestTimestampDataTransformer;

/**
 * Abstract timestamp data transformer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer
 */
class AbstractTimestampDataTransformerTest extends AbstractTestCase {

    /**
     * Test reverseTransform()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testReverseTransform(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-03-23 19:00:00", new DateTimeZone("UTC"));

        $obj = new TestTimestampDataTransformer("Y-m-d H:i:s", "UTC");

        $fmt = $obj->getFormat();
        $arg = $dateTime->format($fmt);

        $this->assertEquals(null, $obj->reverseTransform(null));
        $this->assertEquals(null, $obj->reverseTransform(""));
        $this->assertEquals($dateTime->getTimestamp(), $obj->reverseTransform($arg));
    }

    /**
     * Test transform()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testTransform(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-03-23 19:00:00", new DateTimeZone("UTC"));

        $obj = new TestTimestampDataTransformer("Y-m-d H:i:s", "UTC");

        $fmt = $obj->getFormat();
        $exp = $dateTime->format($fmt);

        $this->assertEquals(null, $obj->transform(null));
        $this->assertEquals($exp, $obj->transform($dateTime->getTimestamp()));
    }
}
