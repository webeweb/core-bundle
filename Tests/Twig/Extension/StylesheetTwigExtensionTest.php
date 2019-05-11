<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\StylesheetTwigExtension;

/**
 * Stylesheet Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StylesheetTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $this->assertEquals("wbw.core.twig.extension.stylesheet", StylesheetTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the cssRGBA() method.
     *
     * @return void
     */
    public function testCssRGBA() {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->cssRGBA(null));

        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRGBA("#000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRGBA("000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRGBA("#000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRGBA("000", 0.00));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("#AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("#AAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("AAA", 0.50));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("#aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("#aaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRGBA("aaa", 0.50));

        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRGBA("#FFFFFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRGBA("FFFFFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRGBA("#FFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRGBA("FFF", 1.00));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("cssRGBA", $res[0]->getName());
        $this->assertEquals([$obj, "cssRGBA"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("cssRGBA", $res[0]->getName());
        $this->assertEquals([$obj, "cssRGBA"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }
}
