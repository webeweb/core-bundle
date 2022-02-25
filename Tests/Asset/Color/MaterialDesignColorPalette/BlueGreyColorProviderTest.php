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
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\MaterialDesignColorPaletteInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BlueGreyColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Blue grey color provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BlueGreyColorProviderTest extends AbstractTestCase {

    /**
     * Tests getColors()
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new BlueGreyColorProvider();

        $res = $obj->getColors();
        $this->assertCount(8, $res);

        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_50, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_100, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_200, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_300, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_400, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_500, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_600, $res);
        $this->assertArrayHasKey(MaterialDesignColorPaletteInterface::COLOR_700, $res);

        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_50, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_100, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_200, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_300, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_400, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_600, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_700, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
    }

    /**
     * Tests getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new BlueGreyColorProvider();

        $this->assertEquals(BlueGreyColorProviderInterface::BLUE_GREY_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.asset.color.blue_grey", BlueGreyColorProvider::SERVICE_NAME);

        $obj = new BlueGreyColorProvider();

        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);
        $this->assertInstanceOf(BlueGreyColorProviderInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
