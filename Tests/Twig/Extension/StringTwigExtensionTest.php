<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use DateTime;
use Exception;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\StringTwigExtension;

/**
 * String Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StringTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests dateFormat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDateFormat(): void {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->dateFormat(null));
        $this->assertEquals("2018-01-14 18:00", $obj->dateFormat(new DateTime("2018-01-14 18:00")));
        $this->assertEquals("14/01/2018 18:00", $obj->dateFormat(new DateTime("2018-01-14 18:00"), "d/m/Y H:i"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(10, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("dateFormat", $res[$i]->getName());
        $this->assertEquals([$obj, "dateFormat"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("htmlEntityDecode", $res[$i]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("htmlEntityEncode", $res[$i]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("md5", $res[$i]->getName());
        $this->assertEquals([$obj, "md5"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringExtractUpperCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringExtractUpperCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringFormat", $res[$i]->getName());
        $this->assertEquals([$obj, "stringFormat"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringHumanReadable", $res[$i]->getName());
        $this->assertEquals([$obj, "stringHumanReadable"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringLowerCamelCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringLowerCamelCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringSnakeCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringSnakeCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("stringUpperCamelCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringUpperCamelCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("dateFormat", $res[$i]->getName());
        $this->assertEquals([$obj, "dateFormat"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("htmlEntityDecode", $res[$i]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("htmlEntityEncode", $res[$i]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("md5", $res[$i]->getName());
        $this->assertEquals([$obj, "md5"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringExtractUpperCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringExtractUpperCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringFormat", $res[$i]->getName());
        $this->assertEquals([$obj, "stringFormat"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringHumanReadable", $res[$i]->getName());
        $this->assertEquals([$obj, "stringHumanReadable"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringLowerCamelCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringLowerCamelCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringSnakeCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringSnakeCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("stringUpperCamelCase", $res[$i]->getName());
        $this->assertEquals([$obj, "stringUpperCamelCase"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests htmlEntityDecode()
     *
     * @return void
     */
    public function testHtmlEntityDecode(): void {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->htmlEntityDecode(null));
        $this->assertEquals("&", $obj->htmlEntityDecode("&amp;"));
    }

    /**
     * Tests htmlEntityEncode()
     *
     * @return void
     */
    public function testHtmlEntityEncode(): void {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->htmlEntityEncode(null));
        $this->assertEquals("&amp;", $obj->htmlEntityEncode("&"));
    }

    /**
     * Tests md5()
     *
     * @return void
     */
    public function testMd5(): void {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->md5(null));
        $this->assertEquals("d41d8cd98f00b204e9800998ecf8427e", $obj->md5(""));
    }

    /**
     * Tests the stringExtractUpperCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringExtractUpperCase() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->stringExtractUpperCase(null));
        $this->assertEquals("STE", $obj->stringExtractUpperCase("StringTwigExtension"));
        $this->assertEquals("ste", $obj->stringExtractUpperCase("StringTwigExtension", true));
    }

    /**
     * Tests the stringFormat() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringFormat() {

        $obj = new StringTwigExtension($this->twigEnvironment);
        $this->assertEquals("", $obj->stringFormat(null, "_____ _____ _"));
        $this->assertEquals("", $obj->stringFormat("Helloworld!", null));

        $this->assertEquals("Hello world !", $obj->stringFormat("Helloworld!", "_____ _____ _"));
        $this->assertEquals("+33 6 12 34 56 78", $obj->stringFormat("612345678", "+33 _ __ __ __ __"));
    }

    /**
     * Tests the stringHumanReadable() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringHumanReadable() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->stringHumanReadable(null));
        $this->assertEquals("String twig extension", $obj->stringHumanReadable("StringTwigExtension"));
    }

    /**
     * Tests the stringLowerCamelCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringLowerCamelCase() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->stringLowerCamelCase(null));
        $this->assertEquals("stringTwigExtension", $obj->stringLowerCamelCase("StringTwigExtension"));
    }

    /**
     * Tests the stringSnakeCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringSnakeCase() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->stringSnakeCase(null));
        $this->assertEquals("string_twig_extension", $obj->stringSnakeCase("StringTwigExtension"));
        $this->assertEquals("string-twig-extension", $obj->stringSnakeCase("StringTwigExtension", "-"));
    }

    /**
     * Tests the stringUpperCamelCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringUpperCamelCase() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->stringUpperCamelCase(null));
        $this->assertEquals("StringTwigExtension", $obj->stringUpperCamelCase("StringTwigExtension"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("wbw.core.twig.extension.string", StringTwigExtension::SERVICE_NAME);

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

}
