<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestNavigationThemeProviderTrait;

/**
 * Navigation theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Theme
 */
class NavigationThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestNavigationThemeProviderTrait();

        $this->assertNull($obj->getNavigationThemeProvider());
    }

    /**
     * Tests the setNavigationThemeProvider() method.
     *
     * @return void
     */
    public function testSetNavigationThemeProvider() {

        // Set an Navigation theme provider mock.
        $navigationThemeProvider = $this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock();

        $obj = new TestNavigationThemeProviderTrait();

        $obj->setNavigationThemeProvider($navigationThemeProvider);
        $this->assertSame($navigationThemeProvider, $obj->getNavigationThemeProvider());
    }

}
