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

use WBW\Bundle\CoreBundle\Color\AmberColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Amber color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class AmberColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FFF8E1", AmberColorInterface::COLOR_AMBER_50);
        $this->assertEquals("#FFECB3", AmberColorInterface::COLOR_AMBER_100);
        $this->assertEquals("#FFE082", AmberColorInterface::COLOR_AMBER_200);
        $this->assertEquals("#FFD54F", AmberColorInterface::COLOR_AMBER_300);
        $this->assertEquals("#FFCA28", AmberColorInterface::COLOR_AMBER_400);
        $this->assertEquals("#FFC107", AmberColorInterface::COLOR_AMBER_500);
        $this->assertEquals("#FFB300", AmberColorInterface::COLOR_AMBER_600);
        $this->assertEquals("#FFA000", AmberColorInterface::COLOR_AMBER_700);
        $this->assertEquals("#FF8F00", AmberColorInterface::COLOR_AMBER_800);
        $this->assertEquals("#FF6F00", AmberColorInterface::COLOR_AMBER_900);
        $this->assertEquals("#FFE57F", AmberColorInterface::COLOR_AMBER_A100);
        $this->assertEquals("#FFD740", AmberColorInterface::COLOR_AMBER_A200);
        $this->assertEquals("#FFC400", AmberColorInterface::COLOR_AMBER_A400);
        $this->assertEquals("#FFAB00", AmberColorInterface::COLOR_AMBER_A700);
    }

}
