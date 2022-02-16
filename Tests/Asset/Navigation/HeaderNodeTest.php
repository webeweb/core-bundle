<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Navigation;

use WBW\Bundle\CoreBundle\Asset\Navigation\HeaderNode;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Navigation\TestNavigationNode;

/**
 * Header node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation
 */
class HeaderNodeTest extends AbstractTestCase {

    /**
     * Tests addNode()
     *
     * @return void
     */
    public function testAddNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new HeaderNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([], $obj->getNodes());

        $this->assertNull($node->getParent());
        $this->assertNull($node->getAlphabeticalTreeNodeParent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HeaderNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertTrue($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getMatcher());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
