<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\HttpKernel;

use TestKernel;
use WBW\Bundle\CoreBundle\HttpKernel\KernelHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Kernel helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class KernelHelperTest extends AbstractTestCase {

    /**
     * Tests getProjectDir()
     *
     * @return void
     */
    public function testGetProjectDir(): void {

        // Set a Kernel mock.
        $kernel = new TestKernel("test", true);

        $this->assertStringStartsWith(getcwd(), KernelHelper::getProjectDir($kernel));
    }
}
