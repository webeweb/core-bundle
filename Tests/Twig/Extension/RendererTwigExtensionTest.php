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

use DateTime;
use Twig_Node;
use Twig_SimpleFilter;
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.core.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the coreScriptFilter() method.
     *
     * @return void
     */
    public function testCoreScriptFilter() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $res = <<< EOT
<script type="text/javascript">
content
</script>
EOT;
        $this->assertEquals($res, $obj->coreScriptFilter("content"));
    }

    /**
     * Tests the formatDateFilter() method.
     *
     * @return void
     */
    public function testFormatDateFilter() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->formatDateFilter());
        $this->assertEquals("2018-01-14 18:00", $obj->formatDateFilter(new DateTime("2018-01-14 18:00")));
        $this->assertEquals("14/01/2018 18:00", $obj->formatDateFilter(new DateTime("2018-01-14 18:00"), "d/m/Y H:i"));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("coreScript", $res[0]->getName());
        $this->assertEquals([$obj, "coreScriptFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("formatDate", $res[1]->getName());
        $this->assertEquals([$obj, "formatDateFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithFontAwesome() {

        $res = '<i class="fa fa-home"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithMaterialDesignIconicFont() {

        $res = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "zmdi:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithMeteocons() {

        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "mc:A"));
    }
}
