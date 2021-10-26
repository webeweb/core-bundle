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
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\MaterialDesignColorPaletteInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\DeepOrangeColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Deep orange color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class DeepOrangeColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors(): void {

        $obj = new DeepOrangeColorProvider();

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

        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_50, $res[MaterialDesignColorPaletteInterface::COLOR_50]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_100, $res[MaterialDesignColorPaletteInterface::COLOR_100]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_200, $res[MaterialDesignColorPaletteInterface::COLOR_200]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_300, $res[MaterialDesignColorPaletteInterface::COLOR_300]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_400, $res[MaterialDesignColorPaletteInterface::COLOR_400]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_500, $res[MaterialDesignColorPaletteInterface::COLOR_500]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_600, $res[MaterialDesignColorPaletteInterface::COLOR_600]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_700, $res[MaterialDesignColorPaletteInterface::COLOR_700]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A100, $res[MaterialDesignColorPaletteInterface::COLOR_A100]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A200, $res[MaterialDesignColorPaletteInterface::COLOR_A200]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A400, $res[MaterialDesignColorPaletteInterface::COLOR_A400]);
        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_A700, $res[MaterialDesignColorPaletteInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new DeepOrangeColorProvider();

        $this->assertEquals(DeepOrangeColorProviderInterface::DEEP_ORANGE_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.asset.color.deep_orange", DeepOrangeColorProvider::SERVICE_NAME);

        $obj = new DeepOrangeColorProvider();

        $this->assertInstanceOf(ColorProviderInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertInstanceOf(MaterialDesignColorPaletteInterface::class, $obj);
        $this->assertInstanceOf(DeepOrangeColorProviderInterface::class, $obj);

        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
