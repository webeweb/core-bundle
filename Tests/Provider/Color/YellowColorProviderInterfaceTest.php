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

use WBW\Bundle\CoreBundle\Provider\Color\YellowColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Yellow color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class YellowColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFFDE7", YellowColorProviderInterface::COLOR_YELLOW_50);
        $this->assertEquals("#FFF9C4", YellowColorProviderInterface::COLOR_YELLOW_100);
        $this->assertEquals("#FFF59D", YellowColorProviderInterface::COLOR_YELLOW_200);
        $this->assertEquals("#FFF176", YellowColorProviderInterface::COLOR_YELLOW_300);
        $this->assertEquals("#FFEE58", YellowColorProviderInterface::COLOR_YELLOW_400);
        $this->assertEquals("#FFEB3B", YellowColorProviderInterface::COLOR_YELLOW_500);
        $this->assertEquals("#FDD835", YellowColorProviderInterface::COLOR_YELLOW_600);
        $this->assertEquals("#FBC02D", YellowColorProviderInterface::COLOR_YELLOW_700);
        $this->assertEquals("#F9A825", YellowColorProviderInterface::COLOR_YELLOW_800);
        $this->assertEquals("#F57F17", YellowColorProviderInterface::COLOR_YELLOW_900);
        $this->assertEquals("#FFFF8D", YellowColorProviderInterface::COLOR_YELLOW_A100);
        $this->assertEquals("#FFFF00", YellowColorProviderInterface::COLOR_YELLOW_A200);
        $this->assertEquals("#FFEA00", YellowColorProviderInterface::COLOR_YELLOW_A400);
        $this->assertEquals("#FFD600", YellowColorProviderInterface::COLOR_YELLOW_A700);
    }

}
