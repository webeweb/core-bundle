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

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringEnvironmentTrait;

/**
 * String environment trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringEnvironmentTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringEnvironmentTrait();

        $this->assertNull($obj->getEnvironment());
    }

    /**
     * Tests the setEnvironment() method.
     *
     * @return void
     */
    public function testSetEnvironment() {

        $obj = new TestStringEnvironmentTrait();

        $obj->setEnvironment("environment");
        $this->assertEquals("environment", $obj->getEnvironment());
    }
}
