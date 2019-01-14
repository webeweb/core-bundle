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

use WBW\Bundle\CoreBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestFooterThemeProviderTrait;

/**
 * Footer theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Theme
 */
class FooterThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestFooterThemeProviderTrait();

        $this->assertNull($obj->getFooterThemeProvider());
    }

    /**
     * Tests the setFooterThemeProvider() method.
     *
     * @return void
     */
    public function testSetFooterThemeProvider() {

        // Set an Footer theme provider mock.
        $footerThemeProvider = $this->getMockBuilder(FooterThemeProviderInterface::class)->getMock();

        $obj = new TestFooterThemeProviderTrait();

        $obj->setFooterThemeProvider($footerThemeProvider);
        $this->assertSame($footerThemeProvider, $obj->getFooterThemeProvider());
    }
}
