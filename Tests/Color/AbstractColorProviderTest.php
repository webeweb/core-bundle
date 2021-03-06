<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestColorProvider;

/**
 * Abstract color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class AbstractColorProviderTest extends AbstractTestCase {

    /**
     * Tests the setDomain() method.
     *
     * @return void
     */
    public function testSetDomain(): void {

        $obj = new TestColorProvider();

        $obj->setDomain("domain");
        $this->assertEquals("domain", $obj->getDomain());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestColorProvider();

        $this->assertEquals("test", $obj->getDomain());
    }
}
