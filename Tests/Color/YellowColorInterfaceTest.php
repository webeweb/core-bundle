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

use WBW\Bundle\CoreBundle\Color\YellowColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Yellow color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class YellowColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFFDE7", YellowColorInterface::COLOR_YELLOW_50);
        $this->assertEquals("#FFF9C4", YellowColorInterface::COLOR_YELLOW_100);
        $this->assertEquals("#FFF59D", YellowColorInterface::COLOR_YELLOW_200);
        $this->assertEquals("#FFF176", YellowColorInterface::COLOR_YELLOW_300);
        $this->assertEquals("#FFEE58", YellowColorInterface::COLOR_YELLOW_400);
        $this->assertEquals("#FFEB3B", YellowColorInterface::COLOR_YELLOW_500);
        $this->assertEquals("#FDD835", YellowColorInterface::COLOR_YELLOW_600);
        $this->assertEquals("#FBC02D", YellowColorInterface::COLOR_YELLOW_700);
        $this->assertEquals("#F9A825", YellowColorInterface::COLOR_YELLOW_800);
        $this->assertEquals("#F57F17", YellowColorInterface::COLOR_YELLOW_900);
        $this->assertEquals("#FFFF8D", YellowColorInterface::COLOR_YELLOW_A100);
        $this->assertEquals("#FFFF00", YellowColorInterface::COLOR_YELLOW_A200);
        $this->assertEquals("#FFEA00", YellowColorInterface::COLOR_YELLOW_A400);
        $this->assertEquals("#FFD600", YellowColorInterface::COLOR_YELLOW_A700);
    }

}
