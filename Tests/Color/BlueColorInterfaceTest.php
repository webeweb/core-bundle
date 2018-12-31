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

use WBW\Bundle\CoreBundle\Color\BlueColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Blue color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class BlueColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E3F2FD", BlueColorInterface::COLOR_BLUE_50);
        $this->assertEquals("#BBDEFB", BlueColorInterface::COLOR_BLUE_100);
        $this->assertEquals("#90CAF9", BlueColorInterface::COLOR_BLUE_200);
        $this->assertEquals("#64B5F6", BlueColorInterface::COLOR_BLUE_300);
        $this->assertEquals("#42A5F5", BlueColorInterface::COLOR_BLUE_400);
        $this->assertEquals("#2196F3", BlueColorInterface::COLOR_BLUE_500);
        $this->assertEquals("#1E88E5", BlueColorInterface::COLOR_BLUE_600);
        $this->assertEquals("#1976D2", BlueColorInterface::COLOR_BLUE_700);
        $this->assertEquals("#1565C0", BlueColorInterface::COLOR_BLUE_800);
        $this->assertEquals("#0D47A1", BlueColorInterface::COLOR_BLUE_900);
        $this->assertEquals("#82B1FF", BlueColorInterface::COLOR_BLUE_A100);
        $this->assertEquals("#448AFF", BlueColorInterface::COLOR_BLUE_A200);
        $this->assertEquals("#2979FF", BlueColorInterface::COLOR_BLUE_A400);
        $this->assertEquals("#2962FF", BlueColorInterface::COLOR_BLUE_A700);
    }

}
