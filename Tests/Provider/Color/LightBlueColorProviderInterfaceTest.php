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

use WBW\Bundle\CoreBundle\Provider\Color\LightBlueColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Light blue color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class LightBlueColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E1F5FE", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_50);
        $this->assertEquals("#B3E5FC", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_100);
        $this->assertEquals("#81D4FA", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_200);
        $this->assertEquals("#4FC3F7", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_300);
        $this->assertEquals("#29B6F6", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_400);
        $this->assertEquals("#03A9F4", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_500);
        $this->assertEquals("#039BE5", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_600);
        $this->assertEquals("#0288D1", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_700);
        $this->assertEquals("#0277BD", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_800);
        $this->assertEquals("#01579B", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_900);
        $this->assertEquals("#80D8FF", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_A100);
        $this->assertEquals("#40C4FF", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_A200);
        $this->assertEquals("#00B0FF", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_A400);
        $this->assertEquals("#0091EA", LightBlueColorProviderInterface::COLOR_LIGHT_BLUE_A700);
    }

}
