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

use WBW\Bundle\CoreBundle\Color\ColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class ColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() mmethod.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("50", ColorInterface::COLOR_50);
        $this->assertEquals("100", ColorInterface::COLOR_100);
        $this->assertEquals("200", ColorInterface::COLOR_200);
        $this->assertEquals("300", ColorInterface::COLOR_300);
        $this->assertEquals("400", ColorInterface::COLOR_400);
        $this->assertEquals("500", ColorInterface::COLOR_500);
        $this->assertEquals("600", ColorInterface::COLOR_600);
        $this->assertEquals("700", ColorInterface::COLOR_700);

        $this->assertEquals("A100", ColorInterface::COLOR_A100);
        $this->assertEquals("A200", ColorInterface::COLOR_A200);
        $this->assertEquals("A400", ColorInterface::COLOR_A400);
        $this->assertEquals("A700", ColorInterface::COLOR_A700);
    }

}
