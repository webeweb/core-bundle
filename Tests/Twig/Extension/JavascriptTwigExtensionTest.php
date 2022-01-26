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
use WBW\Bundle\CoreBundle\Twig\Extension\JavascriptTwigExtension;

/**
 * Javascript Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class JavascriptTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new JavascriptTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("jsGtag", $res[0]->getName());
        $this->assertEquals([$obj, "jsGtag"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new JavascriptTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("jsGtag", $res[0]->getName());
        $this->assertEquals([$obj, "jsGtag"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests the jsGtag() method.
     *
     * @returns void
     */
    public function testJsGtag(): void {

        $obj = new JavascriptTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/JavascriptTwigExtensionTest.testJsTag.js.txt");

        $this->assertEquals($res, $obj->jsGtag("UA-123456789-0"));

        $this->assertEquals("", $obj->jsGtag(null));
        $this->assertEquals("", $obj->jsGtag(""));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.javascript", JavascriptTwigExtension::SERVICE_NAME);

        $obj = new JavascriptTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
