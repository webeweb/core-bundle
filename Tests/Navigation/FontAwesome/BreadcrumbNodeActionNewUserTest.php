<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Navigation\FontAwesome;

use WBW\Bundle\CoreBundle\Navigation\FontAwesome\BreadcrumbNodeActionNewUser;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Breadcrumb node action "New user" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Navigation\FontAwesome
 */
class BreadcrumbNodeActionNewUserTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreadcrumbNodeActionNewUser("route");

        $this->assertEquals("navigation.node.action.new", $obj->getId());
        $this->assertEquals("fa:user-plus", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }

}