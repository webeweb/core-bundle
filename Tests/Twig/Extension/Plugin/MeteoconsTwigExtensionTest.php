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
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MeteoconsTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("meteoconsIcon", $res[0]->getName());
        $this->assertEquals([$obj, "meteoconsIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     */
    public function testMeteoconsIconFunction() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = ["name" => "B", "style" => "color: #FFFFFF;"];
        $res = '<i class="meteocons" data-meteocons="B" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithName() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = ["name" => "B"];
        $res = '<i class="meteocons" data-meteocons="B"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithStyle() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = ["style" => "color: #FFFFFF;"];
        $res = '<i class="meteocons" data-meteocons="A" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     */
    public function testMeteoconsIconFunctionWithoutArguments() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = '<i class="meteocons" data-meteocons="B" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->renderIcon("B", "color: #FFFFFF;"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("wbw.core.twig.extension.asset.meteocons", MeteoconsTwigExtension::SERVICE_NAME);

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
