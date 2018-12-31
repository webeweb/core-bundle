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

use WBW\Bundle\CoreBundle\Color\RedColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Red color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class RedColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFEBEE", RedColorInterface::COLOR_RED_50);
        $this->assertEquals("#FFCDD2", RedColorInterface::COLOR_RED_100);
        $this->assertEquals("#EF9A9A", RedColorInterface::COLOR_RED_200);
        $this->assertEquals("#E57373", RedColorInterface::COLOR_RED_300);
        $this->assertEquals("#EF5350", RedColorInterface::COLOR_RED_400);
        $this->assertEquals("#F44336", RedColorInterface::COLOR_RED_500);
        $this->assertEquals("#E53935", RedColorInterface::COLOR_RED_600);
        $this->assertEquals("#D32F2F", RedColorInterface::COLOR_RED_700);
        $this->assertEquals("#C62828", RedColorInterface::COLOR_RED_800);
        $this->assertEquals("#B71C1C", RedColorInterface::COLOR_RED_900);
        $this->assertEquals("#FF8A80", RedColorInterface::COLOR_RED_A100);
        $this->assertEquals("#FF5252", RedColorInterface::COLOR_RED_A200);
        $this->assertEquals("#FF1744", RedColorInterface::COLOR_RED_A400);
        $this->assertEquals("#D50000", RedColorInterface::COLOR_RED_A700);
    }

}