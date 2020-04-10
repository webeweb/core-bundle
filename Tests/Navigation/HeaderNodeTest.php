<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Navigation;

use WBW\Bundle\CoreBundle\Navigation\HeaderNode;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Navigation\TestNavigationNode;

/**
 * Header node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation
 */
class HeaderNodeTest extends AbstractTestCase {

    /**
     * Tests the addNode() method.
     *
     * @return void
     */
    public function testAddNode() {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new HeaderNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([], $obj->getNodes());

        $this->assertNull($node->getParent());
        $this->assertNull($node->getAlphabeticalTreeNodeParent());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HeaderNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertTrue($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getMatcher());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
