<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestThemeManagerTrait;

/**
 * Theme manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class ThemeManagerTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestThemeManagerTrait();

        $this->assertNull($obj->getThemeManager());
    }

    /**
     * Tests the setThemeManager() method.
     *
     * @return void
     */
    public function testSetThemeManager() {

        // Set a Theme manager mock.
        $themeManager = new ThemeManager($this->twigEnvironment);

        $obj = new TestThemeManagerTrait();

        $obj->setThemeManager($themeManager);
        $this->assertSame($themeManager, $obj->getThemeManager());
    }

}