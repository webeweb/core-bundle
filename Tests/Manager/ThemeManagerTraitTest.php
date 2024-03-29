<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestThemeManagerTrait;

/**
 * Theme manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class ThemeManagerTraitTest extends AbstractTestCase {

    /**
     * Test setThemeManager()
     *
     * @return void
     */
    public function testSetThemeManager(): void {

        // Set a Theme manager mock.
        $themeManager = new ThemeManager($this->logger, $this->twigEnvironment);

        $obj = new TestThemeManagerTrait();

        $obj->setThemeManager($themeManager);
        $this->assertSame($themeManager, $obj->getThemeManager());
    }
}
