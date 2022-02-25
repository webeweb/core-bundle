<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignColorPaletteTwigExtension;

/**
 * Material Design Color Palette Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class MaterialDesignColorPaletteTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(4, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("materialDesignColorPaletteBackground", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("mdcBackground", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("materialDesignColorPaletteText", $res[2]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("mdcText", $res[3]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));
    }

    /**
     * Tests materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunction(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink", "value" => "500"];
        $res = "mdc-bg-pink-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithName(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink"];
        $res = "mdc-bg-pink";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithValue(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["value" => "500"];
        $res = "mdc-bg-red-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithoutArguments(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "mdc-bg-red";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunction(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink", "value" => "500"];
        $res = "mdc-text-pink-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithName(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink"];
        $res = "mdc-text-pink";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithValue(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["value" => "500"];
        $res = "mdc-text-red-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithoutArguments(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "mdc-text-red";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.asset.material_design_color_palette", MaterialDesignColorPaletteTwigExtension::SERVICE_NAME);

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
