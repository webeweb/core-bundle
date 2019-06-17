<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;

/**
 * Material Design Iconic Font Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MaterialDesignIconicFontTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.core.twig.extension.plugin.material_design_iconic_font", MaterialDesignIconicFontTwigExtension::SERVICE_NAME);

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

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
        $this->assertCount(4, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontList", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("mdiFontList", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[2]);
        $this->assertEquals("materialDesignIconicFontListIcon", $res[2]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[3]);
        $this->assertEquals("mdiFontListIcon", $res[3]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontIcon", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("mdiIcon", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     */
    public function testMaterialDesignIconicFontIconFunction() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = ["name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "border" => "border-circle", "pull" => "left", "spin" => "spin", "rotate" => "180", "flip" => "horizontal", "style" => "color: #FFFFFF;"];
        $res = '<i class="zmdi zmdi-camera-retro zmdi-hc-lg zmdi-hc-fw zmdi-hc-border-circle pull-left zmdi-hc-spin zmdi-hc-rotate-180 zmdi-hc-flip-horizontal" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
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
     */
    public function testRenderIcon() {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = '<i class="zmdi zmdi-camera-retro" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("camera-retro", "color: #FFFFFF;"));
    }
}
