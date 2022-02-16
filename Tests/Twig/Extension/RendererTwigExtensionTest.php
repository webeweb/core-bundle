<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use Twig\Node\Node;
use Twig\TwigFilter;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests coreScriptFilter()
     *
     * @return void
     */
    public function testCoreScriptFilter(): void {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/RendererTwigExtensionTest.testCoreScriptFilter.html.txt");
        $this->assertEquals($res, $obj->coreScriptFilter("content") . "\n");
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("coreScript", $res[0]->getName());
        $this->assertEquals([$obj, "coreScriptFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithFontAwesome(): void {

        $this->assertEquals('<i class="fa fa-home"></i>', RendererTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
        $this->assertEquals('<i class="fas fa-home"></i>', RendererTwigExtension::renderIcon($this->twigEnvironment, "fas:home"));
        $this->assertEquals('<i class="far fa-home"></i>', RendererTwigExtension::renderIcon($this->twigEnvironment, "far:home"));
        $this->assertEquals('<i class="fal fa-home"></i>', RendererTwigExtension::renderIcon($this->twigEnvironment, "fal:home"));
        $this->assertEquals('<i class="fad fa-home"></i>', RendererTwigExtension::renderIcon($this->twigEnvironment, "fad:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMaterialDesignIconicFont(): void {

        $res = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "zmdi:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMeteocons(): void {

        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "mc:A"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
