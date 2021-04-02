<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Icon;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Icon\TestIcon;

/**
 * Abstract icon test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Icon
 */
class AbstractIconTest extends AbstractTestCase {

    /**
     * Tests the setName() method.
     *
     * @return void
     */
    public function testSetName(): void {

        $obj = new TestIcon();

        $obj->setName("name");
        $this->assertEquals("name", $obj->getName());
    }

    /**
     * Tests the setStyle() method.
     *
     * @return void
     */
    public function testSetStyle(): void {

        $obj = new TestIcon();

        $obj->setStyle("style");
        $this->assertEquals("style", $obj->getStyle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestIcon();

        $this->assertNull($obj->getName());
        $this->assertNull($obj->getStyle());
    }
}
