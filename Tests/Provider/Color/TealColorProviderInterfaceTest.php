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

use WBW\Bundle\CoreBundle\Provider\Color\TealColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Teal color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class TealColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E0F2F1", TealColorProviderInterface::COLOR_TEAL_50);
        $this->assertEquals("#B2DFDB", TealColorProviderInterface::COLOR_TEAL_100);
        $this->assertEquals("#80CBC4", TealColorProviderInterface::COLOR_TEAL_200);
        $this->assertEquals("#4DB6AC", TealColorProviderInterface::COLOR_TEAL_300);
        $this->assertEquals("#26A69A", TealColorProviderInterface::COLOR_TEAL_400);
        $this->assertEquals("#009688", TealColorProviderInterface::COLOR_TEAL_500);
        $this->assertEquals("#00897B", TealColorProviderInterface::COLOR_TEAL_600);
        $this->assertEquals("#00796B", TealColorProviderInterface::COLOR_TEAL_700);
        $this->assertEquals("#00695C", TealColorProviderInterface::COLOR_TEAL_800);
        $this->assertEquals("#004D40", TealColorProviderInterface::COLOR_TEAL_900);
        $this->assertEquals("#A7FFEB", TealColorProviderInterface::COLOR_TEAL_A100);
        $this->assertEquals("#64FFDA", TealColorProviderInterface::COLOR_TEAL_A200);
        $this->assertEquals("#1DE9B6", TealColorProviderInterface::COLOR_TEAL_A400);
        $this->assertEquals("#00BFA5", TealColorProviderInterface::COLOR_TEAL_A700);
    }

}
