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
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;

/**
 * Font Awesome Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class FontAwesomeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.core.twig.extension.plugin.font_awesome", FontAwesomeTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("fontAwesomeList", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("fontAwesomeListIcon", $res[1]->getName());
        $this->assertEquals([$obj, "fontAwesomeListIconFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("fontAwesomeIcon", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunction() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["font" => "s", "name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "bordered" => true, "pull" => "left", "animated" => "spin"];
        $res = '<i class="fas fa-camera-retro fa-lg fa-fw fa-border fa-pull-left fa-spin"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithAnimated() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["animated" => "pulse"];
        $res = '<i class="fa fa-home fa-pulse"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithBordered() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["bordered" => true];
        $res = '<i class="fa fa-home fa-border"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithFixedWidth() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["fixedWidth" => true];
        $res = '<i class="fa fa-home fa-fw"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithFont() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["font" => "s"];
        $res = '<i class="fas fa-home"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithName() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["name" => "camera-retro"];
        $res = '<i class="fa fa-camera-retro"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithPull() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["pull" => "right"];
        $res = '<i class="fa fa-home fa-pull-right"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithSize() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["size" => "xs"];
        $res = '<i class="fa fa-home fa-xs"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithStyle() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = ["style" => "color: #FFFFFF;"];
        $res = '<i class="fa fa-home" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithoutArguments() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="fa fa-home"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests the fontAwesomeListFilter() method.
     *
     * @return void
     */
    public function testFontAwesomeListFilter() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeListIconFilter($obj->fontAwesomeIconFunction([]), "content");
        $res = '<ul class="fa-ul"><li><span class="fa-li"><i class="fa fa-home"></i></span>content</li></ul>';
        $this->assertEquals($res, $obj->fontAwesomeListFilter($arg));
    }

    /**
     * Tests the fontAwesomeListIconFilter() method.
     *
     * @return void
     */
    public function testFontAwesomeListIconFilter() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeIconFunction([]);
        $res = '<li><span class="fa-li"><i class="fa fa-home"></i></span></li>';
        $this->assertEquals($res, $obj->fontAwesomeListIconFilter($arg, null));
    }

    /**
     * Tests the fontAwesomeListIconFilter() method.
     *
     * @return void
     */
    public function testFontAwesomeListIconFilterWithContent() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeIconFunction([]);
        $res = '<li><span class="fa-li"><i class="fa fa-home"></i></span>content</li>';
        $this->assertEquals($res, $obj->fontAwesomeListIconFilter($arg, "content"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = '<i class="fa fa-camera-retro" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("camera-retro", "color: #FFFFFF;"));
    }

}
