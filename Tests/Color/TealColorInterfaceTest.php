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

use WBW\Bundle\CoreBundle\Color\TealColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Teal color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class TealColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E0F2F1", TealColorInterface::COLOR_TEAL_50);
        $this->assertEquals("#B2DFDB", TealColorInterface::COLOR_TEAL_100);
        $this->assertEquals("#80CBC4", TealColorInterface::COLOR_TEAL_200);
        $this->assertEquals("#4DB6AC", TealColorInterface::COLOR_TEAL_300);
        $this->assertEquals("#26A69A", TealColorInterface::COLOR_TEAL_400);
        $this->assertEquals("#009688", TealColorInterface::COLOR_TEAL_500);
        $this->assertEquals("#00897B", TealColorInterface::COLOR_TEAL_600);
        $this->assertEquals("#00796B", TealColorInterface::COLOR_TEAL_700);
        $this->assertEquals("#00695C", TealColorInterface::COLOR_TEAL_800);
        $this->assertEquals("#004D40", TealColorInterface::COLOR_TEAL_900);
        $this->assertEquals("#A7FFEB", TealColorInterface::COLOR_TEAL_A100);
        $this->assertEquals("#64FFDA", TealColorInterface::COLOR_TEAL_A200);
        $this->assertEquals("#1DE9B6", TealColorInterface::COLOR_TEAL_A400);
        $this->assertEquals("#00BFA5", TealColorInterface::COLOR_TEAL_A700);
    }

}