<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class ColorManagerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ColorManager();

        $this->assertEquals("webeweb.core.manager.color", ColorManager::SERVICE_NAME);

        $this->assertEquals([], $obj->getProviders());
    }

}
