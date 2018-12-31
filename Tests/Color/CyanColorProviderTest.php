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

use WBW\Bundle\CoreBundle\Color\CyanColorProvider;
use WBW\Bundle\CoreBundle\Provider\Color\CyanColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Cyan color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class CyanColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors() {

        $obj = new CyanColorProvider();

        $res = $obj->getColors();
        $this->assertCount(12, $res);

        $this->assertArrayHasKey(ColorInterface::COLOR_50, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_100, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_200, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_300, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_400, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_500, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_600, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_700, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A100, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A200, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A400, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A700, $res);

        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_700, $res[ColorInterface::COLOR_700]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_A100, $res[ColorInterface::COLOR_A100]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_A200, $res[ColorInterface::COLOR_A200]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_A400, $res[ColorInterface::COLOR_A400]);
        $this->assertEquals(CyanColorProviderInterface::COLOR_CYAN_A700, $res[ColorInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new CyanColorProvider();

        $res = ColorInterface::COLOR_CYAN;
        $this->assertEquals($res, $obj->getName());
    }

}
