<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Color;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\TestColorProvider;

/**
 * Abstract color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color
 */
class AbstractColorProviderTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestColorProvider();

        $res = [
            "domain" => "fixture",
            "name"   => "test",
            "colors" => [],
        ];

        $this->assertEquals($res, $obj->jsonSerialize());
    }

    /**
     * Tests setDomain()
     *
     * @return void
     */
    public function testSetDomain(): void {

        $obj = new TestColorProvider();

        $obj->setDomain("domain");
        $this->assertEquals("domain", $obj->getDomain());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestColorProvider();

        $this->assertEquals("fixture", $obj->getDomain());
    }
}
