<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use WBW\Bundle\CoreBundle\Helper\OSHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * OS helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class OSHelperTest extends AbstractTestCase {

    /**
     * Tests isLinux()
     *
     * @return void
     */
    public function testIsLinux(): void {

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertTrue(OSHelper::isLinux());
        } else {

            $this->assertFalse(OSHelper::isLinux());
        }
    }

    /**
     * Tests isWindows()
     *
     * @return void
     */
    public function testIsWindows(): void {

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertFalse(OSHelper::isWindows());
        } else {

            $this->assertTrue(OSHelper::isWindows());
        }
    }
}
