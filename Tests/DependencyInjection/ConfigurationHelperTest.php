<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DependencyInjection;

use WBW\Bundle\CoreBundle\DependencyInjection\ConfigurationHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Configuration helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package DependencyInjection
 */
class ConfigurationHelperTest extends AbstractTestCase {

    /**
     * Tests loadYamlConfig()
     *
     * @return void
     */
    public function testLoadYamlConfig(): void {

        $res = ConfigurationHelper::loadYamlConfig(getcwd() . "/DependencyInjection", "assets");
        $this->assertNotEquals([], $res);
    }

    /**
     * Tests loadYamlConfig()
     *
     * @return void
     */
    public function testLoadYamlConfigWithoutFilename(): void {

        $res = ConfigurationHelper::loadYamlConfig(getcwd() . "/DependencyInjection", "exception");
        $this->assertEquals([], $res);
    }
}
