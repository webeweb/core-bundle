<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette;

use JsonSerializable;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\MaterialDesignColorPaletteInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BlackColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Black color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BlackColorProviderTest extends AbstractTestCase {

    /**
     * Tests getColors()
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new BlackColorProvider();

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

        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Tests getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new BlackColorProvider();

        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.asset.color.black", BlackColorProvider::SERVICE_NAME);

        $obj = new BlackColorProvider();

        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);
        $this->assertInstanceOf(BlackColorProviderInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
