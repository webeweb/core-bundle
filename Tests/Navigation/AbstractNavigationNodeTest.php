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
use WBW\Bundle\CoreBundle\Navigation\NavigationItem;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Navigation\TestAbstractNavigationNode;

/**
 * Abstract navigation node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation
 */
class AbstractNavigationNodeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestAbstractNavigationNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }

    /**
     * Tests the isDisplayable() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testIsDisplayable() {

        $obj = new TestAbstractNavigationNode("id");

        $this->assertSame($obj, $obj->addNode(new NavigationItem("id1")));
        $this->assertSame($obj, $obj->addNode(new NavigationNode("id2")));

        $this->assertFalse($obj->isDisplayable());

        $this->assertNotSame($obj, $obj->getLastNode()->setActive(true));
        $this->assertNotSame($obj, $obj->getLastNode()->setEnable(true));
        $this->assertTrue($obj->isDisplayable());
    }

    /**
     * Tests the setActive() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetActive() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests the setEnable() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetEnable() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setEnable(true);
        $this->assertTrue($obj->getEnable());
    }

    /**
     * Tests the setIcon() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetIcon() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setIcon("icon");
        $this->assertEquals("icon", $obj->getIcon());
    }

    /**
     * Tests the setMatcher() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetMatcher() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setMatcher(NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $obj->getMatcher());
    }

    /**
     * Tests the setTarget() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetTarget() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setTarget("_blank");
        $this->assertEquals("_blank", $obj->getTarget());
    }

    /**
     * Tests the setURI() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetURI() {

        $obj = new TestAbstractNavigationNode("id");

        $obj->setURI("route");
        $this->assertEquals("route", $obj->getUri());
    }

}
