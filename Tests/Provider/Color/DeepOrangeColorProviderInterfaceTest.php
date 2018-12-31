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

use WBW\Bundle\CoreBundle\Provider\Color\DeepOrangeColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Deep orange color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class DeepOrangeColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FBE9E7", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_50);
        $this->assertEquals("#FFCCBC", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_100);
        $this->assertEquals("#FFAB91", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_200);
        $this->assertEquals("#FF8A65", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_300);
        $this->assertEquals("#FF7043", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_400);
        $this->assertEquals("#FF5722", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_500);
        $this->assertEquals("#F4511E", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_600);
        $this->assertEquals("#E64A19", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_700);
        $this->assertEquals("#D84315", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_800);
        $this->assertEquals("#BF360C", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_900);
        $this->assertEquals("#FF9E80", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_A100);
        $this->assertEquals("#FF6E40", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_A200);
        $this->assertEquals("#FF3D00", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_A400);
        $this->assertEquals("#DD2C00", DeepOrangeColorProviderInterface::COLOR_DEEP_ORANGE_A700);
    }

}
