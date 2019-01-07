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

use WBW\Bundle\CoreBundle\Provider\Color\OrangeColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Orange color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class OrangeColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("orange", OrangeColorProviderInterface::ORANGE_COLOR_NAME);

        $this->assertEquals("#FFF3E0", OrangeColorProviderInterface::ORANGE_COLOR_50);
        $this->assertEquals("#FFE0B2", OrangeColorProviderInterface::ORANGE_COLOR_100);
        $this->assertEquals("#FFCC80", OrangeColorProviderInterface::ORANGE_COLOR_200);
        $this->assertEquals("#FFB74D", OrangeColorProviderInterface::ORANGE_COLOR_300);
        $this->assertEquals("#FFA726", OrangeColorProviderInterface::ORANGE_COLOR_400);
        $this->assertEquals("#FF9800", OrangeColorProviderInterface::ORANGE_COLOR_500);
        $this->assertEquals("#FB8C00", OrangeColorProviderInterface::ORANGE_COLOR_600);
        $this->assertEquals("#F57C00", OrangeColorProviderInterface::ORANGE_COLOR_700);
        $this->assertEquals("#EF6C00", OrangeColorProviderInterface::ORANGE_COLOR_800);
        $this->assertEquals("#E65100", OrangeColorProviderInterface::ORANGE_COLOR_900);
        $this->assertEquals("#FFD180", OrangeColorProviderInterface::ORANGE_COLOR_A100);
        $this->assertEquals("#FFAB40", OrangeColorProviderInterface::ORANGE_COLOR_A200);
        $this->assertEquals("#FF9100", OrangeColorProviderInterface::ORANGE_COLOR_A400);
        $this->assertEquals("#FF6D00", OrangeColorProviderInterface::ORANGE_COLOR_A700);
    }

}
