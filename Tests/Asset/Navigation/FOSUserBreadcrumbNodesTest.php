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

use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Bundle\CoreBundle\Asset\Navigation\FOSUserBreadcrumbNodes;
use WBW\Library\Symfony\Assets\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * FOSUser breadcrumb nodes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation
 */
class FOSUserBreadcrumbNodesTest extends AbstractTestCase {

    /**
     * Tests getFontAwesomeBreadcrumbNodes()
     *
     * @return void
     */
    public function testGetFontAwesomeBreadcrumbNodes(): void {

        $res = FOSUserBreadcrumbNodes::getFontAwesomeBreadcrumbNodes();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(BreadcrumbNode::class, $res[0]);
        $this->assertEquals("label.edit_profile", $res[0]->getLabel());
        $this->assertEquals("fa:user", $res[0]->getIcon());
        $this->assertEquals("fos_user_profile_edit", $res[0]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[0]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[1]);
        $this->assertEquals("label.show_profile", $res[1]->getLabel());
        $this->assertEquals("fa:user", $res[1]->getIcon());
        $this->assertEquals("fos_user_profile_show", $res[1]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[1]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[2]);
        $this->assertEquals("label.change_password", $res[2]->getLabel());
        $this->assertEquals("fa:lock", $res[2]->getIcon());
        $this->assertEquals("fos_user_change_password", $res[2]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[2]->getMatcher());
    }

    /**
     * Tests getMaterialDesignIconicFontBreadcrumbNodes()
     *
     * @return void
     */
    public function testGetMaterialDesignIconicFontBreadcrumbNodes(): void {

        $res = FOSUserBreadcrumbNodes::getMaterialDesignIconicFontBreadcrumbNodes();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(BreadcrumbNode::class, $res[0]);
        $this->assertEquals("label.edit_profile", $res[0]->getLabel());
        $this->assertEquals("zmdi:account", $res[0]->getIcon());
        $this->assertEquals("fos_user_profile_edit", $res[0]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[0]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[1]);
        $this->assertEquals("label.show_profile", $res[1]->getLabel());
        $this->assertEquals("zmdi:account", $res[1]->getIcon());
        $this->assertEquals("fos_user_profile_show", $res[1]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[1]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[2]);
        $this->assertEquals("label.change_password", $res[2]->getLabel());
        $this->assertEquals("zmdi:lock", $res[2]->getIcon());
        $this->assertEquals("fos_user_change_password", $res[2]->getUri());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_ROUTER, $res[2]->getMatcher());
    }
}
