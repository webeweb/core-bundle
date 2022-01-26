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

use Exception;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\StringTwigExtension;

/**
 * String Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StringTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("stringExtractUpperCase", $res[0]->getName());
        $this->assertEquals([$obj, "stringExtractUpperCase"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("stringHumanReadable", $res[1]->getName());
        $this->assertEquals([$obj, "stringHumanReadable"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[2]);
        $this->assertEquals("stringLowerCamelCase", $res[2]->getName());
        $this->assertEquals([$obj, "stringLowerCamelCase"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[3]);
        $this->assertEquals("stringSnakeCase", $res[3]->getName());
        $this->assertEquals([$obj, "stringSnakeCase"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[4]);
        $this->assertEquals("stringUpperCamelCase", $res[4]->getName());
        $this->assertEquals([$obj, "stringUpperCamelCase"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("stringExtractUpperCase", $res[0]->getName());
        $this->assertEquals([$obj, "stringExtractUpperCase"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("stringHumanReadable", $res[1]->getName());
        $this->assertEquals([$obj, "stringHumanReadable"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("stringLowerCamelCase", $res[2]->getName());
        $this->assertEquals([$obj, "stringLowerCamelCase"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("stringSnakeCase", $res[3]->getName());
        $this->assertEquals([$obj, "stringSnakeCase"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("stringUpperCamelCase", $res[4]->getName());
        $this->assertEquals([$obj, "stringUpperCamelCase"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));
    }

    /**
     * Tests the stringExtractUpperCase() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringExtractUpperCase() {

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertEquals("STE", $obj->stringExtractUpperCase("StringTwigExtension"));
        $this->assertEquals("ste", $obj->stringExtractUpperCase("StringTwigExtension", true));
    }

    /**
     * Tests the stringHumanReadable() method
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testStringHumanReadable() {

        $obj = new StringTwigExtension($this->twigEnvironment);

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

        $this->assertEquals("StringTwigExtension", $obj->stringUpperCamelCase("StringTwigExtension"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("wbw.core.twig.extension.string", StringTwigExtension::SERVICE_NAME);

        $obj = new StringTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

}
