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

use WBW\Bundle\CoreBundle\Asset\Navigation\MaterialDesignIconicFont\NavigationNodeSettings;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Component\NavigationNodeInterface;

/**
 * Navigation node "settings" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeSettingsTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeSettings("route");

        $this->assertEquals("navigation.node.settings", $obj->getLabel());
        $this->assertEquals("zmdi:settings", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
