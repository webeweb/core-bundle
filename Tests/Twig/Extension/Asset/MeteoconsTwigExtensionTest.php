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
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class MeteoconsTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("meteoconsIcon", $res[0]->getName());
        $this->assertEquals([$obj, "meteoconsIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests meteoconsIconFunction()
     *
     * @return void
     */
    public function testMeteoconsIconFunction(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [
            "name"  => "B",
            "style" => "color: #FFFFFF;",
        ];

        $res = '<i class="meteocons" data-meteocons="B" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests meteoconsIconFunction()
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithName(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [
            "name" => "B",
        ];

        $res = '<i class="meteocons" data-meteocons="B"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests meteoconsIconFunction()
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithStyle(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [
            "style" => "color: #FFFFFF;",
        ];

        $res = '<i class="meteocons" data-meteocons="A" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests meteoconsIconFunction()
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithoutArguments(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [];

        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = '<i class="meteocons" data-meteocons="B" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("B", "color: #FFFFFF;"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.asset.meteocons", MeteoconsTwigExtension::SERVICE_NAME);

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
