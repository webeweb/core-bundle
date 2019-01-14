<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\Color\PinkColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Pink color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class PinkColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("pink", PinkColorProviderInterface::PINK_COLOR_NAME);

        $this->assertEquals("#FCE4EC", PinkColorProviderInterface::PINK_COLOR_50);
        $this->assertEquals("#F8BBD0", PinkColorProviderInterface::PINK_COLOR_100);
        $this->assertEquals("#F48FB1", PinkColorProviderInterface::PINK_COLOR_200);
        $this->assertEquals("#F06292", PinkColorProviderInterface::PINK_COLOR_300);
        $this->assertEquals("#EC407A", PinkColorProviderInterface::PINK_COLOR_400);
        $this->assertEquals("#E91E63", PinkColorProviderInterface::PINK_COLOR_500);
        $this->assertEquals("#D81B60", PinkColorProviderInterface::PINK_COLOR_600);
        $this->assertEquals("#C2185B", PinkColorProviderInterface::PINK_COLOR_700);
        $this->assertEquals("#AD1457", PinkColorProviderInterface::PINK_COLOR_800);
        $this->assertEquals("#880E4F", PinkColorProviderInterface::PINK_COLOR_900);
        $this->assertEquals("#FF80AB", PinkColorProviderInterface::PINK_COLOR_A100);
        $this->assertEquals("#FF4081", PinkColorProviderInterface::PINK_COLOR_A200);
        $this->assertEquals("#F50057", PinkColorProviderInterface::PINK_COLOR_A400);
        $this->assertEquals("#C51162", PinkColorProviderInterface::PINK_COLOR_A700);
    }
}
