<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\DataTransformer\Timestamp;

use WBW\Bundle\CoreBundle\Form\DataTransformer\Timestamp\DateTimestampDataTransformer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Date timestamp data transformer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer\Timestamp
 */
class DateTimestampDataTransformerTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DateTimestampDataTransformer();

        $this->assertEquals("Y-m-d", $obj->getFormat());
        $this->assertEquals("UTC", $obj->getTimezone());
    }
}
