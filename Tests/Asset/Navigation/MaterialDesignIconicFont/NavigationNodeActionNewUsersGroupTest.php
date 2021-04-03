<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Navigation\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Asset\Navigation\MaterialDesignIconicFont\NavigationNodeActionNewUsersGroup;
use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Navigation node action "new users group" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeActionNewUsersGroupTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeActionNewUsersGroup("route");

        $this->assertEquals("navigation.node.action.new", $obj->getLabel());
        $this->assertEquals("zmdi:accounts-add", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
