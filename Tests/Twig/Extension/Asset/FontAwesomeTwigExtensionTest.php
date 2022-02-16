<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\FontAwesomeTwigExtension;

/**
 * Font Awesome Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class FontAwesomeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests fontAwesomeIconFunction()
     *
     * @return void
     */
    public function testFontAwesomeIconFunction(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = [
            "font"       => "s",
            "name"       => "camera-retro",
            "size"       => "lg",
            "fixedWidth" => true,
            "bordered"   => true,
            "pull"       => "left",
            "animation"  => "spin",
            "style"      => "color: #FFFFFF;",
        ];

        $res = '<i class="fas fa-camera-retro fa-lg fa-fw fa-border fa-pull-left fa-spin" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests fontAwesomeIconFunction()
     *
     * @return void
     */
    public function testFontAwesomeIconFunctionWithoutArguments(): void {

        $arg = [];

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = '<i class="fa fa-home"></i>';
        $this->assertEquals($res, $obj->fontAwesomeIconFunction($arg));
    }

    /**
     * Tests fontAwesomeListFilter()
     *
     * @return void
     */
    public function testFontAwesomeListFilter(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeListIconFilter($obj->fontAwesomeIconFunction([]), "content");

        $res = '<ul class="fa-ul"><li><span class="fa-li"><i class="fa fa-home"></i></span>content</li></ul>';
        $this->assertEquals($res, $obj->fontAwesomeListFilter($arg));
    }

    /**
     * Tests fontAwesomeListIconFilter()
     *
     * @return void
     */
    public function testFontAwesomeListIconFilter(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeIconFunction([]);

        $res = '<li><span class="fa-li"><i class="fa fa-home"></i></span></li>';
        $this->assertEquals($res, $obj->fontAwesomeListIconFilter($arg, null));
    }

    /**
     * Tests fontAwesomeListIconFilter()
     *
     * @return void
     */
    public function testFontAwesomeListIconFilterWithContent(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $arg = $obj->fontAwesomeIconFunction([]);

        $res = '<li><span class="fa-li"><i class="fa fa-home"></i></span>content</li>';
        $this->assertEquals($res, $obj->fontAwesomeListIconFilter($arg, "content"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(4, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("fontAwesomeList", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("faList", $res[1]->getName());
        $this->assertEquals([$obj, "fontAwesomeListFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[2]);
        $this->assertEquals("fontAwesomeListIcon", $res[2]->getName());
        $this->assertEquals([$obj, "fontAwesomeListIconFilter"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[3]);
        $this->assertEquals("faListIcon", $res[3]->getName());
        $this->assertEquals([$obj, "fontAwesomeListIconFilter"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("fontAwesomeIcon", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("faIcon", $res[1]->getName());
        $this->assertEquals([$obj, "fontAwesomeIconFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $res = '<i class="fa fa-camera-retro" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("camera-retro", "color: #FFFFFF;"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.asset.font_awesome", FontAwesomeTwigExtension::SERVICE_NAME);

        $obj = new FontAwesomeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
