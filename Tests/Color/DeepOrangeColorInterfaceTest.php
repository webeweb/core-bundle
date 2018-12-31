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

use WBW\Bundle\CoreBundle\Color\DeepOrangeColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Deep orange color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class DeepOrangeColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FBE9E7", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_50);
        $this->assertEquals("#FFCCBC", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_100);
        $this->assertEquals("#FFAB91", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_200);
        $this->assertEquals("#FF8A65", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_300);
        $this->assertEquals("#FF7043", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_400);
        $this->assertEquals("#FF5722", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_500);
        $this->assertEquals("#F4511E", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_600);
        $this->assertEquals("#E64A19", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_700);
        $this->assertEquals("#D84315", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_800);
        $this->assertEquals("#BF360C", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_900);
        $this->assertEquals("#FF9E80", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_A100);
        $this->assertEquals("#FF6E40", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_A200);
        $this->assertEquals("#FF3D00", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_A400);
        $this->assertEquals("#DD2C00", DeepOrangeColorInterface::COLOR_DEEP_ORANGE_A700);
    }

}