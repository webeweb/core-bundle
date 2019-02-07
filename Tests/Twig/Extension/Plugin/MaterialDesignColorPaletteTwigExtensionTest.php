<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignColorPaletteTwigExtension;

/**
 * Material Design Color Palette Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MaterialDesignColorPaletteTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.core.twig.extension.plugin.material_design_color_palette", MaterialDesignColorPaletteTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(4, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("materialDesignColorPaletteBackground", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("mdcBackground", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteBackgroundFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("materialDesignColorPaletteText", $res[2]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("mdcText", $res[3]->getName());
        $this->assertEquals([$obj, "materialDesignColorPaletteTextFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the materialDesignColorPaletteBackgroundFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunction() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink", "value" => "500"];
        $res = "mdc-bg-pink-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteBackgroundFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithName() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink"];
        $res = "mdc-bg-pink";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteBackgroundFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithValue() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["value" => "500"];
        $res = "mdc-bg-red-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteBackgroundFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteBackgroundFunctionWithoutArguments() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "mdc-bg-red";
        $this->assertEquals($res, $obj->materialDesignColorPaletteBackgroundFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteTextFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunction() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink", "value" => "500"];
        $res = "mdc-text-pink-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteTextFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithName() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["name" => "pink"];
        $res = "mdc-text-pink";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteTextFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithValue() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = ["value" => "500"];
        $res = "mdc-text-red-500";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }

    /**
     * Tests the materialDesignColorPaletteTextFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignColorPaletteTextFunctionWithoutArguments() {

        $obj = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "mdc-text-red";
        $this->assertEquals($res, $obj->materialDesignColorPaletteTextFunction($arg));
    }
}
