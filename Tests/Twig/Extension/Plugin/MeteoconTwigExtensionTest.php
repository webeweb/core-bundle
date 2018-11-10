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
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MeteoconsTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("meteoconsIcon", $res[0]->getName());
        $this->assertEquals([$obj, "meteoconsIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
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
     * @depends testGetFunctions
     */
    public function testMeteoconsIconFunctionWithoutArguments() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
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
     * @depends testGetFunctions
     */
    public function testMeteoconsIconFunctionWithStyle() {

        $obj = new MeteoconsTwigExtension($this->twigEnvironment);

        $arg = ["style" => "color: #FFFFFF;"];
        $res = '<i class="meteocons" data-meteocons="A" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res, $obj->meteoconsIconFunction($arg));
    }

}
