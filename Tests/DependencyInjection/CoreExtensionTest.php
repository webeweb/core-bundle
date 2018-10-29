<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection;

use WBW\Bundle\CoreBundle\DependencyInjection\CoreExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Core extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection
 */
class CoreExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new CoreExtension();

        $this->assertNull($obj->load([], $this->containerBuilder));
    }

}
