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

use WBW\Bundle\CoreBundle\Color\PinkColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Pink color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class PinkColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FCE4EC", PinkColorInterface::COLOR_PINK_50);
        $this->assertEquals("#F8BBD0", PinkColorInterface::COLOR_PINK_100);
        $this->assertEquals("#F48FB1", PinkColorInterface::COLOR_PINK_200);
        $this->assertEquals("#F06292", PinkColorInterface::COLOR_PINK_300);
        $this->assertEquals("#EC407A", PinkColorInterface::COLOR_PINK_400);
        $this->assertEquals("#E91E63", PinkColorInterface::COLOR_PINK_500);
        $this->assertEquals("#D81B60", PinkColorInterface::COLOR_PINK_600);
        $this->assertEquals("#C2185B", PinkColorInterface::COLOR_PINK_700);
        $this->assertEquals("#AD1457", PinkColorInterface::COLOR_PINK_800);
        $this->assertEquals("#880E4F", PinkColorInterface::COLOR_PINK_900);
        $this->assertEquals("#FF80AB", PinkColorInterface::COLOR_PINK_A100);
        $this->assertEquals("#FF4081", PinkColorInterface::COLOR_PINK_A200);
        $this->assertEquals("#F50057", PinkColorInterface::COLOR_PINK_A400);
        $this->assertEquals("#C51162", PinkColorInterface::COLOR_PINK_A700);
    }

}
