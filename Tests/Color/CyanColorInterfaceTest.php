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

use WBW\Bundle\CoreBundle\Color\CyanColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Cyan color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class CyanColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E0F7FA", CyanColorInterface::COLOR_CYAN_50);
        $this->assertEquals("#B2EBF2", CyanColorInterface::COLOR_CYAN_100);
        $this->assertEquals("#80DEEA", CyanColorInterface::COLOR_CYAN_200);
        $this->assertEquals("#4DD0E1", CyanColorInterface::COLOR_CYAN_300);
        $this->assertEquals("#26C6DA", CyanColorInterface::COLOR_CYAN_400);
        $this->assertEquals("#00BCD4", CyanColorInterface::COLOR_CYAN_500);
        $this->assertEquals("#00ACC1", CyanColorInterface::COLOR_CYAN_600);
        $this->assertEquals("#0097A7", CyanColorInterface::COLOR_CYAN_700);
        $this->assertEquals("#00838F", CyanColorInterface::COLOR_CYAN_800);
        $this->assertEquals("#006064", CyanColorInterface::COLOR_CYAN_900);
        $this->assertEquals("#84FFFF", CyanColorInterface::COLOR_CYAN_A100);
        $this->assertEquals("#18FFFF", CyanColorInterface::COLOR_CYAN_A200);
        $this->assertEquals("#00E5FF", CyanColorInterface::COLOR_CYAN_A400);
        $this->assertEquals("#00B8D4", CyanColorInterface::COLOR_CYAN_A700);
    }

}