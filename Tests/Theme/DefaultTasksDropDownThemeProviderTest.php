<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Bootstrap\Theme;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Theme\DefaultTasksDropDownThemeProvider;

/**
 * Default tasks drop down theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Bootstrap\Theme
 */
class DefaultTasksDropDownThemeProviderTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultTasksDropDownThemeProvider();

        $this->assertEquals([], $obj->getTasks());
        $this->assertEquals(null, $obj->getView());
    }

}
