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

use WBW\Bundle\CoreBundle\Provider\Color\LightGreenColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Light green color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class LightGreenColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#F1F8E9", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_50);
        $this->assertEquals("#DCEDC8", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_100);
        $this->assertEquals("#C5E1A5", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_200);
        $this->assertEquals("#AED581", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_300);
        $this->assertEquals("#9CCC65", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_400);
        $this->assertEquals("#8BC34A", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_500);
        $this->assertEquals("#7CB342", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_600);
        $this->assertEquals("#689F38", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_700);
        $this->assertEquals("#558B2F", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_800);
        $this->assertEquals("#33691E", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_900);
        $this->assertEquals("#CCFF90", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_A100);
        $this->assertEquals("#B2FF59", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_A200);
        $this->assertEquals("#76FF03", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_A400);
        $this->assertEquals("#64DD17", LightGreenColorProviderInterface::COLOR_LIGHT_GREEN_A700);
    }

}
