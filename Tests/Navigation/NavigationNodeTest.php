<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Navigation;

use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Navigation node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation
 */
class NavigationNodeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NavigationNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }

}
