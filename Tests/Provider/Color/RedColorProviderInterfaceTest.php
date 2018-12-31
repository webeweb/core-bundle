<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\Color\RedColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Red color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class RedColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFEBEE", RedColorProviderInterface::COLOR_RED_50);
        $this->assertEquals("#FFCDD2", RedColorProviderInterface::COLOR_RED_100);
        $this->assertEquals("#EF9A9A", RedColorProviderInterface::COLOR_RED_200);
        $this->assertEquals("#E57373", RedColorProviderInterface::COLOR_RED_300);
        $this->assertEquals("#EF5350", RedColorProviderInterface::COLOR_RED_400);
        $this->assertEquals("#F44336", RedColorProviderInterface::COLOR_RED_500);
        $this->assertEquals("#E53935", RedColorProviderInterface::COLOR_RED_600);
        $this->assertEquals("#D32F2F", RedColorProviderInterface::COLOR_RED_700);
        $this->assertEquals("#C62828", RedColorProviderInterface::COLOR_RED_800);
        $this->assertEquals("#B71C1C", RedColorProviderInterface::COLOR_RED_900);
        $this->assertEquals("#FF8A80", RedColorProviderInterface::COLOR_RED_A100);
        $this->assertEquals("#FF5252", RedColorProviderInterface::COLOR_RED_A200);
        $this->assertEquals("#FF1744", RedColorProviderInterface::COLOR_RED_A400);
        $this->assertEquals("#D50000", RedColorProviderInterface::COLOR_RED_A700);
    }

}
