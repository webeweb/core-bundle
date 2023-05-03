<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets;

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignColorPaletteTwigExtension;

/**
 * Material Design Color Palette Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class MaterialDesignColorPaletteTwigExtensionTest extends AbstractTestCase {

    /**
     * Test getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(4, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("materialDesignColorPaletteBackground", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("mdcBackground", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("materialDesignColorPaletteText", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("mdcText", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunction(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "name"  => "pink",
            "value" => "500",
        ];
        $exp = "mdc-bg-pink-500";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithName(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "name" => "pink",
        ];
        $exp = "mdc-bg-pink";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithValue(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "value" => "500",
        ];
        $exp = "mdc-bg-red-500";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteBackgroundFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithoutArguments(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $exp = "mdc-bg-red";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunction(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "name"  => "pink",
            "value" => "500",
        ];
        $exp = "mdc-text-pink-500";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithName(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "name" => "pink",
        ];
        $exp = "mdc-text-pink";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithValue(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [
            "value" => "500",
        ];
        $exp = "mdc-text-red-500";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Test materialDesignColorPaletteTextFunction()
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithoutArguments(): void {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $exp = "mdc-text-red";

        $this->assertEquals($exp, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.assets.material_design_color_palette", MaterialDesignColorPaletteTwigExtension::SERVICE_NAME);

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
