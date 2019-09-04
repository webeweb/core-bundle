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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class AbstractTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestTwigExtension($this->twigEnvironment);

        $this->assertEquals("&nbsp;", TestTwigExtension::DEFAULT_CONTENT);
        $this->assertEquals("javascript:void(0);", TestTwigExtension::DEFAULT_HREF);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the coreHTMLElement() method.
     *
     * @return void
     */
    public function testCoreHTMLElement() {

        $arg = ["type" => "text/javascript"];
        $res = file_get_contents(__DIR__ . "/testCoreHTMLElement.html.txt");
        $this->assertEquals($res, TestTwigExtension::coreHTMLElement("script", "\n    $(document).ready(function() {});\n", $arg) . "\n");
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new TestTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }
}
