<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\MaterialDesignColorPaletteInterface;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Bundle\CoreBundle\Provider\Color\YellowColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Yellow color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class YellowColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new YellowColorProvider();

        $res = $obj->getColors();
        $this->assertCount(12, $res);

        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_50, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_100, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_200, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_300, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_400, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_500, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_600, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_700, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A100, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A200, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A400, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_A700, $res);

        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_50, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_100, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_200, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_300, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_400, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_600, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_700, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_A100, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_A200, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_A400, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_A700, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new YellowColorProvider();

        $this->assertEquals(YellowColorProviderInterface::YELLOW_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new YellowColorProvider();

        $this->assertEquals("wbw.core.provider.color.yellow", YellowColorProvider::SERVICE_NAME);
        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
