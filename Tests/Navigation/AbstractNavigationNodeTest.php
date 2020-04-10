<?php

/*
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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Navigation\TestNavigationNode;

/**
 * Abstract navigation node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation
 */
class AbstractNavigationNodeTest extends AbstractTestCase {

    /**
     * Tests the addNode() method.
     *
     * @return void
     */
    public function testAddNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $node->getParent());
        $this->assertSame($obj, $node->getAlphabeticalTreeNodeParent());
    }

    /**
     * Tests the clearNode() method.
     *
     * @return void
     */
    public function testClearNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $obj->clearNodes());
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the getFirstNode() method.
     *
     * @return void
     */
    public function testGetFirstNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertSame($node, $obj->getFirstNode());
    }

    /**
     * Tests the getLastNode() method.
     *
     * @return void
     */
    public function testGetLastNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertSame($node, $obj->getLastNode());
    }

    /**
     * Tests the getNodeAt() method.
     *
     * @return void
     */
    public function testGetNodeAt() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertNull($obj->getNodeAt(-1));
        $this->assertSame($node, $obj->getNodeAt(0));
        $this->assertNull($obj->getNodeAt(1));
    }

    /**
     * Tests the getNodeById() method.
     *
     * @return void
     */
    public function testGetNodeById() {

        // Set the Navigation mocks.
        $node1 = new TestNavigationNode("id1");
        $node2 = new TestNavigationNode("id2");

        $obj = new TestNavigationNode("id");
        $obj->addNode($node1);

        $this->assertNull($obj->getNodeById($node2->getId()));
        $this->assertNull($obj->getNodeById($node2->getId(), true));

        $this->assertSame($node1, $obj->getNodeById($node1->getId()));
        $this->assertSame($node1, $obj->getNodeById($node1->getId(), true));

        $node1->addNode($node2);
        $this->assertNull($obj->getNodeById($node2->getId()));
        $this->assertSame($node2, $obj->getNodeById($node2->getId(), true));
    }

    /**
     * Tests the isDisplayable() method.
     *
     * @return void
     */
    public function testIsDisplayable() {

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode(new NavigationNode("node")));

        $this->assertFalse($obj->isDisplayable());

        $this->assertNotSame($obj, $obj->getLastNode()->setActive(true));
        $this->assertNotSame($obj, $obj->getLastNode()->setEnable(true));
        $this->assertTrue($obj->isDisplayable());
    }

    /**
     * Tests the removeNode() method.
     *
     * @return void
     */
    public function testRemoveNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->removeNode($node));

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $obj->removeNode($node));
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive() {

        $obj = new TestNavigationNode("id");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests the setEnable() method.
     *
     * @return void
     */
    public function testSetEnable() {

        $obj = new TestNavigationNode("id");

        $obj->setEnable(true);
        $this->assertTrue($obj->getEnable());
    }

    /**
     * Tests the setIcon() method.
     *
     * @return void
     */
    public function testSetIcon() {

        $obj = new TestNavigationNode("id");

        $obj->setIcon("icon");
        $this->assertEquals("icon", $obj->getIcon());
    }

    /**
     * Tests the setMatcher() method.
     *
     * @return void
     */
    public function testSetMatcher() {

        $obj = new TestNavigationNode("id");

        $obj->setMatcher(NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $obj->getMatcher());
    }

    /**
     * Tests the setTarget() method.
     *
     * @return void
     */
    public function testSetTarget() {

        $obj = new TestNavigationNode("id");

        $obj->setTarget("_blank");
        $this->assertEquals("_blank", $obj->getTarget());
    }

    /**
     * Tests the setUri() method.
     *
     * @return void
     */
    public function testSetUri() {

        $obj = new TestNavigationNode("id");

        $obj->setURI("route");
        $this->assertEquals("route", $obj->getUri());
    }

    /**
     * Tests the size() method.
     *
     * @return void
     */
    public function testSize() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertEquals(0, $obj->size());

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestNavigationNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertNotEquals("", $obj->getAlphabeticalTreeNodeLabel());
        $this->assertNull($obj->getAlphabeticalTreeNodeParent());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getFirstNode());
        $this->assertNull($obj->getIcon());
        $this->assertNotEquals("", $obj->getId());
        $this->assertEquals("id", $obj->getLabel());
        $this->assertNull($obj->getLastNode());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals([], $obj->getNodes());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
