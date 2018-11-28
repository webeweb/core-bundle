<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Theme;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Theme\DefaultHookDropDownThemeProvider;

/**
 * Default hook drop down theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Theme
 */
class DefaultHookDropDownThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultHookDropDownThemeProvider();

        $this->assertEquals([], $obj->getItems());
        $this->assertEquals(null, $obj->getView());
    }

}
