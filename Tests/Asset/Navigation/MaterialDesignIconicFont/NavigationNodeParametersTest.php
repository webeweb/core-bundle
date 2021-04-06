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

use WBW\Bundle\CoreBundle\Asset\Navigation\MaterialDesignIconicFont\NavigationNodeParameters;
use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Navigation node "parameters" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeParametersTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeParameters("route");

        $this->assertEquals("navigation.node.parameters", $obj->getLabel());
        $this->assertEquals("zmdi:wrench", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}