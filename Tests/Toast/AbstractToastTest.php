<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Toast;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Toast\TestToast;

/**
 * Abstract toast test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Toast
 */
class AbstractToastTest extends AbstractTestCase {

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestToast();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestToast();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestToast();

        $this->assertEquals("t", $obj->getType());
        $this->assertEquals("c", $obj->getContent());
    }
}
