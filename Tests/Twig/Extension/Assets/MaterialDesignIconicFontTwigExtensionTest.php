<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignIconicFontTwigExtension;

/**
 * Material Design Iconic Font Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class MaterialDesignIconicFontTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(4, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("materialDesignIconicFontList", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("mdiFontList", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("materialDesignIconicFontListIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("mdiFontListIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("materialDesignIconicFontIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("mdiIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests materialDesignIconicFontIconFunction()
     *
     * @return void
     */
    public function testMaterialDesignIconicFontIconFunction(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = [
            "name"       => "camera-retro",
            "size"       => "lg",
            "fixedWidth" => true,
            "border"     => "border-circle",
            "pull"       => "left",
            "spin"       => "spin",
            "rotate"     => "180",
            "flip"       => "horizontal",
            "style"      => "color: #FFFFFF;",
        ];
        $exp = '<i class="zmdi zmdi-camera-retro zmdi-hc-lg zmdi-hc-fw zmdi-hc-border-circle pull-left zmdi-hc-spin zmdi-hc-rotate-180 zmdi-hc-flip-horizontal" style="color: #FFFFFF;"></i>';

        $this->assertEquals($exp, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests materialDesignIconicFontIconFunction()
     *
     * @return void
     */
    public function testMaterialDesignIconicFontIconFunctionWithoutArguments(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = [];
        $exp = '<i class="zmdi zmdi-home"></i>';

        $this->assertEquals($exp, $obj->materialDesignIconicFontIconFunction($arg));
    }

    /**
     * Tests materialDesignIconicFontListFilter()
     *
     * @return void
     */
    public function testMaterialDesignIconicFontListFilter(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontListIconFilter($obj->materialDesignIconicFontIconFunction([]), "content");
        $exp = '<ul class="zmdi-hc-ul"><li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li></ul>';

        $this->assertEquals($exp, $obj->materialDesignIconicFontListFilter($arg));
    }

    /**
     * Tests materialDesignIconicFontListIconFilter()
     *
     * @return void
     */
    public function testMaterialDesignIconicFontListIconFilter(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontIconFunction([]);
        $exp = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i></li>';

        $this->assertEquals($exp, $obj->materialDesignIconicFontListIconFilter($arg, null));
    }

    /**
     * Tests materialDesignIconicFontListIconFilter()
     *
     * @return void
     */
    public function testMaterialDesignIconicFontListIconFilterWithContent(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $arg = $obj->materialDesignIconicFontIconFunction([]);
        $exp = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li>';

        $this->assertEquals($exp, $obj->materialDesignIconicFontListIconFilter($arg, "content"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $exp = '<i class="zmdi zmdi-camera-retro" style="color: #FFFFFF;"></i>';

        $this->assertEquals($exp, $obj->renderIcon("camera-retro", "color: #FFFFFF;"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.assets.material_design_iconic_font", MaterialDesignIconicFontTwigExtension::SERVICE_NAME);

        $obj = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
