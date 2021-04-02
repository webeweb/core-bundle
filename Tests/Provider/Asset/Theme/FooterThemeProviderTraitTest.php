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

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\FooterThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestFooterThemeProviderTrait;

/**
 * Footer theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class FooterThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setFooterThemeProvider() method.
     *
     * @return void
     */
    public function testSetFooterThemeProvider(): void {

        // Set a Footer theme provider mock.
        $footerThemeProvider = $this->getMockBuilder(FooterThemeProviderInterface::class)->getMock();

        $obj = new TestFooterThemeProviderTrait();

        $obj->setFooterThemeProvider($footerThemeProvider);
        $this->assertSame($footerThemeProvider, $obj->getFooterThemeProvider());
    }
}
