<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Assets\Navigation\FontAwesome;

use WBW\Bundle\CoreBundle\Assets\Navigation\FontAwesome\NavigationNodeActionExport;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Navigation node action "export" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Assets\Navigation\FontAwesome
 */
class NavigationNodeActionExportTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeActionExport("route");

        $this->assertEquals("navigation.node.action.export", $obj->getLabel());
        $this->assertEquals("fa:download", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}