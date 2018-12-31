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

use WBW\Bundle\CoreBundle\Color\LightGreenColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Light green color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class LightGreenColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#F1F8E9", LightGreenColorInterface::COLOR_LIGHT_GREEN_50);
        $this->assertEquals("#DCEDC8", LightGreenColorInterface::COLOR_LIGHT_GREEN_100);
        $this->assertEquals("#C5E1A5", LightGreenColorInterface::COLOR_LIGHT_GREEN_200);
        $this->assertEquals("#AED581", LightGreenColorInterface::COLOR_LIGHT_GREEN_300);
        $this->assertEquals("#9CCC65", LightGreenColorInterface::COLOR_LIGHT_GREEN_400);
        $this->assertEquals("#8BC34A", LightGreenColorInterface::COLOR_LIGHT_GREEN_500);
        $this->assertEquals("#7CB342", LightGreenColorInterface::COLOR_LIGHT_GREEN_600);
        $this->assertEquals("#689F38", LightGreenColorInterface::COLOR_LIGHT_GREEN_700);
        $this->assertEquals("#558B2F", LightGreenColorInterface::COLOR_LIGHT_GREEN_800);
        $this->assertEquals("#33691E", LightGreenColorInterface::COLOR_LIGHT_GREEN_900);
        $this->assertEquals("#CCFF90", LightGreenColorInterface::COLOR_LIGHT_GREEN_A100);
        $this->assertEquals("#B2FF59", LightGreenColorInterface::COLOR_LIGHT_GREEN_A200);
        $this->assertEquals("#76FF03", LightGreenColorInterface::COLOR_LIGHT_GREEN_A400);
        $this->assertEquals("#64DD17", LightGreenColorInterface::COLOR_LIGHT_GREEN_A700);
    }

}