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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\MaterialDesignColorPaletteInterface;
use WBW\Bundle\CoreBundle\Provider\Color\BlackColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Black color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class BlackColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
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
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new BlackColorProvider();

        $this->assertEquals(BlackColorProviderInterface::BLACK_COLOR_NAME, $obj->getName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BlackColorProvider();

        $this->assertEquals("wbw.core.provider.color.black", BlackColorProvider::SERVICE_NAME);
        $this->assertEquals(MaterialDesignColorPaletteInterface::COLOR_DOMAIN, $obj->getDomain());
    }
}
