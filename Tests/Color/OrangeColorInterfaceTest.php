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

use WBW\Bundle\CoreBundle\Color\OrangeColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Orange color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class OrangeColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFF3E0", OrangeColorInterface::COLOR_ORANGE_50);
        $this->assertEquals("#FFE0B2", OrangeColorInterface::COLOR_ORANGE_100);
        $this->assertEquals("#FFCC80", OrangeColorInterface::COLOR_ORANGE_200);
        $this->assertEquals("#FFB74D", OrangeColorInterface::COLOR_ORANGE_300);
        $this->assertEquals("#FFA726", OrangeColorInterface::COLOR_ORANGE_400);
        $this->assertEquals("#FF9800", OrangeColorInterface::COLOR_ORANGE_500);
        $this->assertEquals("#FB8C00", OrangeColorInterface::COLOR_ORANGE_600);
        $this->assertEquals("#F57C00", OrangeColorInterface::COLOR_ORANGE_700);
        $this->assertEquals("#EF6C00", OrangeColorInterface::COLOR_ORANGE_800);
        $this->assertEquals("#E65100", OrangeColorInterface::COLOR_ORANGE_900);
        $this->assertEquals("#FFD180", OrangeColorInterface::COLOR_ORANGE_A100);
        $this->assertEquals("#FFAB40", OrangeColorInterface::COLOR_ORANGE_A200);
        $this->assertEquals("#FF9100", OrangeColorInterface::COLOR_ORANGE_A400);
        $this->assertEquals("#FF6D00", OrangeColorInterface::COLOR_ORANGE_A700);
    }

}
