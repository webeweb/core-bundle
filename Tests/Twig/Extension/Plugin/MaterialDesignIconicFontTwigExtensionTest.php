<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;

/**
 * Material Design Iconic Font Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MaterialDesignIconicFontTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.core.twig.extension.plugin.material_design_iconic_font", MaterialDesignIconicFontTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontList", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("materialDesignIconicFontListIcon", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontIcon", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunction() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "border" => "border-circle", "pull" => "left", "spin" => "spin", "rotate" => "180", "flip" => "horizontal"];
        $res = '<i class="zmdi zmdi-camera-retro zmdi-hc-lg zmdi-hc-fw zmdi-hc-border-circle pull-left zmdi-hc-spin zmdi-hc-rotate-180 zmdi-hc-flip-horizontal"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithBorder() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["border" => "border-circle"];
        $res = '<i class="zmdi zmdi-home zmdi-hc-border-circle"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithFixedWidth() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["fixedWidth" => true];
        $res = '<i class="zmdi zmdi-home zmdi-hc-fw"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithFlip() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["flip" => "vertical"];
        $res = '<i class="zmdi zmdi-home zmdi-hc-flip-vertical"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithName() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["name" => "camera-retro"];
        $res = '<i class="zmdi zmdi-camera-retro"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithPull() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["pull" => "right"];
        $res = '<i class="zmdi zmdi-home pull-right"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithRotate() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["rotate" => "90"];
        $res = '<i class="zmdi zmdi-home zmdi-hc-rotate-90"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithSize() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<i class="zmdi zmdi-home zmdi-hc-lg"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithSpin() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["spin" => "spin"];
        $res = '<i class="zmdi zmdi-home zmdi-hc-spin"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithStyle() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["style" => "color: #FFFFFF;"];
        $res = '<i class="zmdi zmdi-home" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunctionWithoutArguments() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontListFilter() method.
     *
     * @return void
     * @depends testGetFilters
     * @depends testMaterialDesignIconicFontIconFunction
     */
    public function testMaterialDesignIconicFontListFilter() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontListIconFilter($obj->materialDesignIconicFontIconFunction([]), "content");

        $res = '<ul class="zmdi-hc-ul"><li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li></ul>';
        $this->assertEquals($res, $obj->materialDesignIconicFontListFilter($arg));
    }

    /**
     * Tests the materialDesignIconicFontListIconFilter() method.
     *
     * @return void
     * @depends testGetFilters
     * @depends testMaterialDesignIconicFontIconFunction
     */
    public function testMaterialDesignIconicFontListIconFilter() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontIconFunction([]);

        $res = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i></li>';
        $this->assertEquals($res, $obj->materialDesignIconicFontListIconFilter($arg, null));
    }

    /**
     * Tests the materialDesignIconicFontListIconFilter() method.
     *
     * @return void
     * @depends testGetFilters
     * @depends testMaterialDesignIconicFontIconFunction
     */
    public function testMaterialDesignIconicFontListIconFilterWithContent() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontIconFunction([]);

        $res = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li>';
        $this->assertEquals($res, $obj->materialDesignIconicFontListIconFilter($arg, "content"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testRenderIcon() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = '<i class="zmdi zmdi-camera-retro" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("camera-retro", "color: #FFFFFF;"));
    }

}
