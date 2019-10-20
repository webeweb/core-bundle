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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestDateTimeBirthdateTrait;

/**
 * Date/time birthdate trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class DateTimeBirthdateTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestDateTimeBirthdateTrait();

        $this->assertNull($obj->getBirthdate());
    }

    /**
     * Tests the setBirthdate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBirthdate() {

        // Set a date/time mock.
        $birthdate = new DateTime();

        $obj = new TestDateTimeBirthdateTrait();

        $obj->setBirthdate($birthdate);
        $this->assertSame($birthdate, $obj->getBirthdate());
    }
}
