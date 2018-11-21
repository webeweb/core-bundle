<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Navigation\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont\BreadcrumbNodeActionNewUsersGroup;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Breadcrumb node action "New users group" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Navigation\MaterialDesignIconicFont
 */
class BreadcrumbNodeActionNewUsersGroupTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreadcrumbNodeActionNewUsersGroup("route");

        $this->assertEquals("navigation.node.action.new", $obj->getId());
        $this->assertEquals("zmdi:accounts-add", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }

}
