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

use WBW\Bundle\CoreBundle\Provider\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestHookDropDownThemeProviderTrait;

/**
 * Hook drop down theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Theme
 */
class HookDropDownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setHookDropDownThemeProvider()
     *
     * @return void
     */
    public function testSetHookDropDownThemeProvider(): void {

        // Set an Hook drop down theme provider mock.
        $hookDropDownThemeProvider = $this->getMockBuilder(HookDropDownThemeProviderInterface::class)->getMock();

        $obj = new TestHookDropDownThemeProviderTrait();

        $obj->setHookDropDownThemeProvider($hookDropDownThemeProvider);
        $this->assertSame($hookDropDownThemeProvider, $obj->getHookDropDownThemeProvider());
    }
}
