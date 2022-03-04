<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Config;

use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Configuration helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Config
 */
class ConfigurationHelperTest extends AbstractTestCase {

    /**
     * Tests loadYamlConfig()
     *
     * @return void
     */
    public function testLoadYamlConfig(): void {

        $directory = realpath(__DIR__ . "/../../DependencyInjection");

        $res = ConfigurationHelper::loadYamlConfig($directory, "assets");
        $this->assertNotEquals([], $res);
    }

    /**
     * Tests loadYamlConfig()
     *
     * @return void
     */
    public function testLoadYamlConfigWithoutFilename(): void {

        $directory = realpath(__DIR__ . "/../../DependencyInjection");

        $res = ConfigurationHelper::loadYamlConfig($directory, "exception");
        $this->assertEquals([], $res);
    }
}
