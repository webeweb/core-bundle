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

use WBW\Bundle\CoreBundle\Color\PurpleColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Purple color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class PurpleColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#F3E5F5", PurpleColorInterface::COLOR_PURPLE_50);
        $this->assertEquals("#E1BEE7", PurpleColorInterface::COLOR_PURPLE_100);
        $this->assertEquals("#CE93D8", PurpleColorInterface::COLOR_PURPLE_200);
        $this->assertEquals("#BA68C8", PurpleColorInterface::COLOR_PURPLE_300);
        $this->assertEquals("#AB47BC", PurpleColorInterface::COLOR_PURPLE_400);
        $this->assertEquals("#9C27B0", PurpleColorInterface::COLOR_PURPLE_500);
        $this->assertEquals("#8E24AA", PurpleColorInterface::COLOR_PURPLE_600);
        $this->assertEquals("#7B1FA2", PurpleColorInterface::COLOR_PURPLE_700);
        $this->assertEquals("#6A1B9A", PurpleColorInterface::COLOR_PURPLE_800);
        $this->assertEquals("#4A148C", PurpleColorInterface::COLOR_PURPLE_900);
        $this->assertEquals("#EA80FC", PurpleColorInterface::COLOR_PURPLE_A100);
        $this->assertEquals("#E040FB", PurpleColorInterface::COLOR_PURPLE_A200);
        $this->assertEquals("#D500F9", PurpleColorInterface::COLOR_PURPLE_A400);
        $this->assertEquals("#AA00FF", PurpleColorInterface::COLOR_PURPLE_A700);
    }

}
