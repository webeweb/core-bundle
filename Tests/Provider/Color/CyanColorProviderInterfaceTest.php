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

use WBW\Bundle\CoreBundle\Provider\Color\CyanColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Cyan color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class CyanColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E0F7FA", CyanColorProviderInterface::COLOR_CYAN_50);
        $this->assertEquals("#B2EBF2", CyanColorProviderInterface::COLOR_CYAN_100);
        $this->assertEquals("#80DEEA", CyanColorProviderInterface::COLOR_CYAN_200);
        $this->assertEquals("#4DD0E1", CyanColorProviderInterface::COLOR_CYAN_300);
        $this->assertEquals("#26C6DA", CyanColorProviderInterface::COLOR_CYAN_400);
        $this->assertEquals("#00BCD4", CyanColorProviderInterface::COLOR_CYAN_500);
        $this->assertEquals("#00ACC1", CyanColorProviderInterface::COLOR_CYAN_600);
        $this->assertEquals("#0097A7", CyanColorProviderInterface::COLOR_CYAN_700);
        $this->assertEquals("#00838F", CyanColorProviderInterface::COLOR_CYAN_800);
        $this->assertEquals("#006064", CyanColorProviderInterface::COLOR_CYAN_900);
        $this->assertEquals("#84FFFF", CyanColorProviderInterface::COLOR_CYAN_A100);
        $this->assertEquals("#18FFFF", CyanColorProviderInterface::COLOR_CYAN_A200);
        $this->assertEquals("#00E5FF", CyanColorProviderInterface::COLOR_CYAN_A400);
        $this->assertEquals("#00B8D4", CyanColorProviderInterface::COLOR_CYAN_A700);
    }

}
