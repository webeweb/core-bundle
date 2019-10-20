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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestDateTimeUpdatedAtTrait;

/**
 * Date/time updated at trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class DateTimeUpdatedAtTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestDateTimeUpdatedAtTrait();

        $this->assertNull($obj->getUpdatedAt());
    }

    /**
     * Tests the setUpdatedAt() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetUpdatedAt() {

        // Set a date/time mock.
        $updatedAt = new DateTime();

        $obj = new TestDateTimeUpdatedAtTrait();

        $obj->setUpdatedAt($updatedAt);
        $this->assertSame($updatedAt, $obj->getUpdatedAt());
    }
}
