<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\DataTransformer\DateTime;

use WBW\Bundle\CoreBundle\Form\DataTransformer\DateTime\TimeDateTimeDataTransformer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Time date/time data transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer\DateTime
 */
class TimeDateTimeDataTransformerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TimeDateTimeDataTransformer();

        $this->assertEquals("H:i:s", $obj->getFormat());
        $this->assertEquals("UTC", $obj->getTimezone());
    }
}
