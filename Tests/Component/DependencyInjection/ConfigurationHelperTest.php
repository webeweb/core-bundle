<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\DependencyInjection;

use WBW\Bundle\CoreBundle\Component\DependencyInjection\ConfigurationHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Configuration helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Component\DependencyInjection
 */
class ConfigurationHelperTest extends AbstractTestCase {

    /**
     * Tests the loadYamlConfig() method.
     *
     * @return void
     */
    public function testLoadYamlConfig(): void {

        $res = ConfigurationHelper::loadYamlConfig(getcwd() . "/DependencyInjection", "assets");
        $this->assertNotEquals([], $res);
    }

    /**
     * Tests the loadYamlConfig() method.
     *
     * @return void
     */
    public function testLoadYamlConfigWithoutFilename(): void {

        $res = ConfigurationHelper::loadYamlConfig(getcwd() . "/DependencyInjection", "exception");
        $this->assertEquals([], $res);
    }
}
