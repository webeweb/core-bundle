<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper\Assets;

use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\CoreBundle\Helper\Assets\NavigationNodeHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Navigation node helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper\Assets
 */
class NavigationNodeHelperTest extends AbstractTestCase {

    /**
     * Navigation tree.
     *
     * @var NavigationTree
     */
    private $tree;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Navigation tree mock.
        $this->tree = TestFixtures::getNavigationTree();
    }

    /**
     * Test activeTree()
     *
     * @return void
     */
    public function testActiveTree(): void {

        NavigationNodeHelper::activeTree($this->tree, Request::create("https://github.com/webeweb/core-bundle"));

        $this->assertTrue($this->tree->getNodeAt(0)->getActive());

        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(0)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(1)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(2)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(3)->getActive());
        $this->assertTrue($this->tree->getNodeAt(0)->getNodeAt(4)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(5)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(6)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(7)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(8)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(9)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(10)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(11)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(12)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(13)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(14)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(15)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(16)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(17)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(18)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(19)->getActive());
    }

    /**
     * Test getBreadcrumbs()
     *
     * @return void
     */
    public function testGetBreadcrumbs(): void {

        NavigationNodeHelper::activeTree($this->tree, Request::create("https://github.com/webeweb/core-bundle"));

        $res = NavigationNodeHelper::getBreadcrumbs($this->tree);
        $this->assertCount(2, $res);

        $this->assertEquals("GitHub", $res[0]->getLabel());
        $this->assertEquals("Core bundle", $res[1]->getLabel());
    }
}
