<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Assets\Navigation\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Assets\Navigation\MaterialDesignIconicFont\BreadcrumbNodeActionImport;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Breadcrumb node action "import" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Assets\Navigation\MaterialDesignIconicFont
 */
class BreadcrumbNodeActionImportTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BreadcrumbNodeActionImport("route");

        $this->assertEquals("navigation.node.action.import", $obj->getLabel());
        $this->assertEquals("zmdi:upload", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}