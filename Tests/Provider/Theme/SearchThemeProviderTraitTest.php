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

use WBW\Bundle\CoreBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestSearchThemeProviderTrait;

/**
 * Search theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Theme
 */
class SearchThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setSearchThemeProvider() method.
     *
     * @return void
     */
    public function testSetSearchThemeProvider(): void {

        // Set a Search theme provider mock.
        $searchThemeProvider = $this->getMockBuilder(SearchThemeProviderInterface::class)->getMock();

        $obj = new TestSearchThemeProviderTrait();

        $obj->setSearchThemeProvider($searchThemeProvider);
        $this->assertSame($searchThemeProvider, $obj->getSearchThemeProvider());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestSearchThemeProviderTrait();

        $this->assertNull($obj->getSearchThemeProvider());
    }
}
