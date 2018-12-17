<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Navigation\FontAwesome;

use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Navigation\FontAwesome\NavigationNodeDashboard;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Navigation node "Dashboard" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation\FontAwesome
 */
class NavigationNodeDashboardTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NavigationNodeDashboard("route");

        $this->assertEquals("navigation.node.dashboard", $obj->getId());
        $this->assertEquals("fa:square", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }

}
