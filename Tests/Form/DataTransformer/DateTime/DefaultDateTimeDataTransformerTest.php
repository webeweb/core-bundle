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

use WBW\Bundle\CoreBundle\Form\DataTransformer\DateTime\DefaultDateTimeDataTransformer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default date/time data transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer\DateTime
 */
class DefaultDateTimeDataTransformerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultDateTimeDataTransformer();

        $this->assertEquals("Y-m-d H:i:s", $obj->getFormat());
        $this->assertEquals("UTC", $obj->getTimezone());
    }
}