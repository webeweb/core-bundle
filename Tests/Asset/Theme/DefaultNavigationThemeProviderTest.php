<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Asset\Theme\DefaultNavigationThemeProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Theme\TestDefaultNavigationThemeProvider;

/**
 * Default navigation theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Theme
 */
class DefaultNavigationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests translate()
     *
     * @return void
     */
    public function testTranslate(): void {

        $obj = new TestDefaultNavigationThemeProvider();

        $this->assertEquals("id", $obj->translate("id"));

        $obj->setTranslator($this->translator);
        $this->assertEquals("id", $obj->translate("id"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultNavigationThemeProvider();

        $this->assertNull($obj->getView());
        $this->assertInstanceOf(NavigationTree::class, $obj->getTree());
    }
}
