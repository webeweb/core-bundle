<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Navigation\FontAwesome;

use WBW\Bundle\CoreBundle\Asset\Navigation\FontAwesome\NavigationNodeParameters;
use WBW\Library\Symfony\Assets\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Navigation node "parameters" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Navigation\FontAwesome
 */
class NavigationNodeParametersTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeParameters("route");

        $this->assertEquals("navigation.node.parameters", $obj->getLabel());
        $this->assertEquals("fa:wrench", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
