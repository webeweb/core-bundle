<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Color\LightBlueColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Light blue color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class LightBlueColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E1F5FE", LightBlueColorInterface::COLOR_LIGHT_BLUE_50);
        $this->assertEquals("#B3E5FC", LightBlueColorInterface::COLOR_LIGHT_BLUE_100);
        $this->assertEquals("#81D4FA", LightBlueColorInterface::COLOR_LIGHT_BLUE_200);
        $this->assertEquals("#4FC3F7", LightBlueColorInterface::COLOR_LIGHT_BLUE_300);
        $this->assertEquals("#29B6F6", LightBlueColorInterface::COLOR_LIGHT_BLUE_400);
        $this->assertEquals("#03A9F4", LightBlueColorInterface::COLOR_LIGHT_BLUE_500);
        $this->assertEquals("#039BE5", LightBlueColorInterface::COLOR_LIGHT_BLUE_600);
        $this->assertEquals("#0288D1", LightBlueColorInterface::COLOR_LIGHT_BLUE_700);
        $this->assertEquals("#0277BD", LightBlueColorInterface::COLOR_LIGHT_BLUE_800);
        $this->assertEquals("#01579B", LightBlueColorInterface::COLOR_LIGHT_BLUE_900);
        $this->assertEquals("#80D8FF", LightBlueColorInterface::COLOR_LIGHT_BLUE_A100);
        $this->assertEquals("#40C4FF", LightBlueColorInterface::COLOR_LIGHT_BLUE_A200);
        $this->assertEquals("#00B0FF", LightBlueColorInterface::COLOR_LIGHT_BLUE_A400);
        $this->assertEquals("#0091EA", LightBlueColorInterface::COLOR_LIGHT_BLUE_A700);
    }

}
