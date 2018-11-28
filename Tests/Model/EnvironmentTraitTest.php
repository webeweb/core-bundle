<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestEnvironmentTrait;

/**
 * Environment trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class EnvironmentTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestEnvironmentTrait();

        $this->assertNull($obj->getEnvironment());
    }

    /**
     * Tests the setEnvironment() method.
     *
     * @return void
     */
    public function testSetEnvironment() {

        $obj = new TestEnvironmentTrait();

        $obj->setEnvironment("environment");
        $this->assertEquals("environment", $obj->getEnvironment());
    }

}
