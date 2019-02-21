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

use DateTime;
use Exception;
use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\UtilityTwigExtension;

/**
 * Utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class UtilityTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the calcAge() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCalcAge() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertGreaterThanOrEqual(19, $obj->calcAge(new DateTime("2000-02-13")));
        $this->assertGreaterThanOrEqual(19, $obj->calcAge(new DateTime("2000-02-14")));
        $this->assertGreaterThanOrEqual(18, $obj->calcAge(new DateTime("2000-02-15")));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.core.twig.extension.utility", UtilityTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the formatDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFormatDate() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->formatDate());
        $this->assertEquals("2018-01-14 18:00", $obj->formatDate(new DateTime("2018-01-14 18:00")));
        $this->assertEquals("14/01/2018 18:00", $obj->formatDate(new DateTime("2018-01-14 18:00"), "d/m/Y H:i"));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("calcAge", $res[0]->getName());
        $this->assertEquals([$obj, "calcAge"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("formatDate", $res[1]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[2]);
        $this->assertEquals("htmlEntityDecode", $res[2]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[3]);
        $this->assertEquals("htmlEntityEncode", $res[3]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[4]);
        $this->assertEquals("md5", $res[4]->getName());
        $this->assertEquals([$obj, "md5"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("calcAge", $res[0]->getName());
        $this->assertEquals([$obj, "calcAge"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("formatDate", $res[1]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("htmlEntityDecode", $res[2]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("htmlEntityEncode", $res[3]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("md5", $res[4]->getName());
        $this->assertEquals([$obj, "md5"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the htmlEntityDecode() method.
     *
     * @return void
     */
    public function testHtmlEntityDecode() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->htmlEntityDecode(null));
        $this->assertEquals("&", $obj->htmlEntityDecode("&amp;"));
    }

    /**
     * Tests the htmlEntityEncode() method.
     *
     * @return void
     */
    public function testHtmlEntityEncode() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->htmlEntityEncode(null));
        $this->assertEquals("&amp;", $obj->htmlEntityEncode("&"));
    }

    /**
     * Tests the md5() method.
     *
     * @return void
     */
    public function testMd5() {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->md5(null));
        $this->assertEquals("d41d8cd98f00b204e9800998ecf8427e", $obj->md5(""));
    }
}
