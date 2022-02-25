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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StylesheetTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests cssRgba()
     *
     * @return void
     */
    public function testCssRGBA(): void {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->cssRgba(null));

        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRgba("#000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRgba("000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRgba("#000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", $obj->cssRgba("000", 0.00));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("#AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("#AAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("AAA", 0.50));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("#aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("#aaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", $obj->cssRgba("aaa", 0.50));

        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRgba("#FFFFFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRgba("FFFFFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRgba("#FFF", 1.00));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", $obj->cssRgba("FFF", 1.00));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("cssRgba", $res[0]->getName());
        $this->assertEquals([$obj, "cssRgba"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("cssRgba", $res[0]->getName());
        $this->assertEquals([$obj, "cssRgba"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.stylesheet", StylesheetTwigExtension::SERVICE_NAME);

        $obj = new StylesheetTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
