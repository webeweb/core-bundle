<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;

/**
 * Assets Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class AssetsTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests assetExists()
     *
     * @return void
     */
    public function testAssetExists(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);
        $obj->setPublicDirectory(__DIR__ . "/../../Fixtures/app/public");

        $this->assertNull($obj->assetExists(null));
        $this->assertFalse($obj->assetExists("/.gitignore"));
        $this->assertTrue($obj->assetExists("/.gitkeep"));
    }

    /**
     * Tests coreGtag()
     *
     * @returns void
     */
    public function testCoreGtag(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $exp = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreGtag.js.txt");

        $this->assertEquals($exp, $obj->coreGtag("UA-123456789-0"));
        $this->assertNull($obj->coreGtag(null));
        $this->assertNull($obj->coreGtag(""));
    }

    /**
     * Tests coreImageFunction()
     *
     * @return void
     */
    public function testCoreImageFunction(): void {

        $arg = [
            "src"    => "src",
            "alt"    => "alt",
            "width"  => 1024,
            "height" => 768,
            "class"  => "class",
            "usemap" => "#usemap",
        ];
        $exp = '<img src="src" alt="alt" width="1024" height="768" class="class" usemap="#usemap"/>';

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertEquals($exp, $obj->coreImageFunction($arg));
    }

    /**
     * Tests coreImageFunction()
     *
     * @return void
     */
    public function testCoreImageFunctionWithoutArguments(): void {

        $arg = [];
        $exp = "<img />";

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertEquals($exp, $obj->coreImageFunction($arg));
    }

    /**
     * Tests coreRenderIconFunction()
     *
     * @return void
     */
    public function testCoreRenderIconRender(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->coreRenderIconFunction(null));
        $this->assertNull($obj->coreRenderIconFunction("::"));
    }

    /**
     * Tests coreScriptFilter()
     *
     * @return void
     */
    public function testCoreScriptFilter(): void {

        $exp = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreScriptFilter.html.txt");

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertEquals($exp, $obj->coreScriptFilter("content") . "\n");
    }

    /**
     * Tests coreStyleFilter()
     *
     * @return void
     */
    public function testCoreStyleFilter(): void {

        $exp = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreStyleFilter.html.txt");

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertEquals($exp, $obj->coreStyleFilter("content") . "\n");
    }

    /**
     * Tests cssRgba()
     *
     * @return void
     */
    public function testCssRgba(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->cssRgba(null));
        $this->assertNull($obj->cssRgba(""));
        $this->assertEquals("rgba(255, 255, 255, 0.00)", $obj->cssRgba("#FFFFFF", 0.00));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(5, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("assetExists", $res[$i]->getName());
        $this->assertEquals([$obj, "assetExists"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("coreGtag", $res[$i]->getName());
        $this->assertEquals([$obj, "coreGtag"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("coreScript", $res[$i]->getName());
        $this->assertEquals([$obj, "coreScriptFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("coreStyle", $res[$i]->getName());
        $this->assertEquals([$obj, "coreStyleFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("cssRgba", $res[$i]->getName());
        $this->assertEquals([$obj, "cssRgba"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("assetExists", $res[$i]->getName());
        $this->assertEquals([$obj, "assetExists"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreGtag", $res[$i]->getName());
        $this->assertEquals([$obj, "coreGtag"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreImage", $res[$i]->getName());
        $this->assertEquals([$obj, "coreImageFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreRenderIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "coreRenderIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("cssRgba", $res[$i]->getName());
        $this->assertEquals([$obj, "cssRgba"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $this->assertNull(AssetsTwigExtension::renderIcon($this->twigEnvironment, null));
        $this->assertNull(AssetsTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithFontAwesome(): void {

        $this->assertEquals('<i class="fa fa-home"></i>', AssetsTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
        $this->assertEquals('<i class="fas fa-home"></i>', AssetsTwigExtension::renderIcon($this->twigEnvironment, "fas:home"));
        $this->assertEquals('<i class="far fa-home"></i>', AssetsTwigExtension::renderIcon($this->twigEnvironment, "far:home"));
        $this->assertEquals('<i class="fal fa-home"></i>', AssetsTwigExtension::renderIcon($this->twigEnvironment, "fal:home"));
        $this->assertEquals('<i class="fad fa-home"></i>', AssetsTwigExtension::renderIcon($this->twigEnvironment, "fad:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMaterialDesignIconicFont(): void {

        $exp = '<i class="zmdi zmdi-home"></i>';

        $this->assertEquals($exp, AssetsTwigExtension::renderIcon($this->twigEnvironment, "zmdi:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMeteocons(): void {

        $exp = '<i class="meteocons" data-meteocons="A"></i>';

        $this->assertEquals($exp, AssetsTwigExtension::renderIcon($this->twigEnvironment, "mc:A"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.assets", AssetsTwigExtension::SERVICE_NAME);

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertNull($obj->getPublicDirectory());
    }
}
