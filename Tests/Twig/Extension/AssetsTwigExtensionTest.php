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
     * Tests coreGtag()
     *
     * @returns void
     */
    public function testCoreGtag(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreGtag.js.txt");

        $this->assertEquals($res, $obj->coreGtag("UA-123456789-0"));
        $this->assertNull($obj->coreGtag(null));
        $this->assertNull($obj->coreGtag(""));
    }

    /**
     * Tests coreStyleFilter()
     *
     * @return void
     */
    public function testCoreStyleFilter(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreStyleFilter.html.txt");
        $this->assertEquals($res, $obj->coreStyleFilter("content") . "\n");
    }

    /**
     * Tests coreScriptFilter()
     *
     * @return void
     */
    public function testCoreScriptFilter(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/AssetsTwigExtensionTest.testCoreScriptFilter.html.txt");
        $this->assertEquals($res, $obj->coreScriptFilter("content") . "\n");
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(3, $res);

        $i = -1;

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
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreGtag", $res[$i]->getName());
        $this->assertEquals([$obj, "coreGtag"], $res[$i]->getCallable());
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

        $res = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "zmdi:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMeteocons(): void {

        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "mc:A"));
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
    }
}
