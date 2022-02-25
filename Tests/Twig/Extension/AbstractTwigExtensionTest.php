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

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestTwigExtension;

/**
 * Abstract Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class AbstractTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests coreHtmlElement()
     *
     * @return void
     */
    public function testCoreHtmlElement(): void {

        $arg = [
            "type" => "text/javascript",
        ];

        $res = file_get_contents(__DIR__ . "/AbstractTwigExtensionTest.testCoreHtmlElement.html.txt");
        $this->assertEquals($res, TestTwigExtension::coreHtmlElement("script", "\n    $(document).ready(function() {});\n", $arg) . "\n");
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new TestTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestTwigExtension($this->twigEnvironment);

        $this->assertEquals("&nbsp;", TestTwigExtension::DEFAULT_CONTENT);
        $this->assertEquals("javascript:void(0);", TestTwigExtension::DEFAULT_HREF);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
