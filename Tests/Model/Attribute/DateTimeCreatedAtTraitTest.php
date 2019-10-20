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

use DateTime;
use Exception;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestDateTimeCreatedAtTrait;

/**
 * Date/time created at trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class DateTimeCreatedAtTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestDateTimeCreatedAtTrait();

        $this->assertNull($obj->getCreatedAt());
    }

    /**
     * Tests the setCreatedAt() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCreatedAt() {

        // Set a date/time mock.
        $createdAt = new DateTime();

        $obj = new TestDateTimeCreatedAtTrait();

        $obj->setCreatedAt($createdAt);
        $this->assertSame($createdAt, $obj->getCreatedAt());
    }
}
