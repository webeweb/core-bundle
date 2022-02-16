<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme;

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestNavigationThemeProviderTrait;

/**
 * Navigation theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class NavigationThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setNavigationThemeProvider()
     *
     * @return void
     */
    public function testSetNavigationThemeProvider(): void {

        // Set a Navigation theme provider mock.
        $navigationThemeProvider = $this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock();

        $obj = new TestNavigationThemeProviderTrait();

        $obj->setNavigationThemeProvider($navigationThemeProvider);
        $this->assertSame($navigationThemeProvider, $obj->getNavigationThemeProvider());
    }
}
