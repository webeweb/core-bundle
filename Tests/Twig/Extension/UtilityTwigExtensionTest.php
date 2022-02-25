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
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\UtilityTwigExtension;

/**
 * Utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class UtilityTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests calcAge()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCalcAge(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertGreaterThanOrEqual(19, $obj->calcAge(new DateTime("2000-02-13")));
        $this->assertGreaterThanOrEqual(19, $obj->calcAge(new DateTime("2000-02-14")));
        $this->assertGreaterThanOrEqual(18, $obj->calcAge(new DateTime("2000-02-15")));
    }

    /**
     * Tests formatDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFormatDate(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->formatDate());
        $this->assertEquals("2018-01-14 18:00", $obj->formatDate(new DateTime("2018-01-14 18:00")));
        $this->assertEquals("14/01/2018 18:00", $obj->formatDate(new DateTime("2018-01-14 18:00"), "d/m/Y H:i"));
    }

    /**
     * Tests formatString()
     *
     * @return void
     */
    public function testFormatString(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->formatString(null, "_____ _____ _"));
        $this->assertEquals("", $obj->formatString("Helloworld!", null));

        $this->assertEquals("Hello world !", $obj->formatString("Helloworld!", "_____ _____ _"));
        $this->assertEquals("+33 6 12 34 56 78", $obj->formatString("612345678", "+33 _ __ __ __ __"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(8, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("calcAge", $res[0]->getName());
        $this->assertEquals([$obj, "calcAge"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("formatDate", $res[1]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[2]);
        $this->assertEquals("fmtDate", $res[2]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[3]);
        $this->assertEquals("formatString", $res[3]->getName());
        $this->assertEquals([$obj, "formatString"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[4]);
        $this->assertEquals("fmtString", $res[4]->getName());
        $this->assertEquals([$obj, "formatString"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[5]);
        $this->assertEquals("htmlEntityDecode", $res[5]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[6]);
        $this->assertEquals("htmlEntityEncode", $res[6]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[7]);
        $this->assertEquals("md5", $res[7]->getName());
        $this->assertEquals([$obj, "md5"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(9, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("calcAge", $res[0]->getName());
        $this->assertEquals([$obj, "calcAge"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("formatDate", $res[1]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("fmtDate", $res[2]->getName());
        $this->assertEquals([$obj, "formatDate"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("formatString", $res[3]->getName());
        $this->assertEquals([$obj, "formatString"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("fmtString", $res[4]->getName());
        $this->assertEquals([$obj, "formatString"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("htmlEntityDecode", $res[5]->getName());
        $this->assertEquals([$obj, "htmlEntityDecode"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("htmlEntityEncode", $res[6]->getName());
        $this->assertEquals([$obj, "htmlEntityEncode"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("md5", $res[7]->getName());
        $this->assertEquals([$obj, "md5"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("staticMethod", $res[8]->getName());
        $this->assertEquals([$obj, "staticMethodFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));
    }

    /**
     * Tests htmlEntityDecode()
     *
     * @return void
     */
    public function testHtmlEntityDecode(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->htmlEntityDecode(null));
        $this->assertEquals("&", $obj->htmlEntityDecode("&amp;"));
    }

    /**
     * Tests htmlEntityEncode()
     *
     * @return void
     */
    public function testHtmlEntityEncode(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->htmlEntityEncode(null));
        $this->assertEquals("&amp;", $obj->htmlEntityEncode("&"));
    }

    /**
     * Tests md5()
     *
     * @return void
     */
    public function testMd5(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals("", $obj->md5(null));
        $this->assertEquals("d41d8cd98f00b204e9800998ecf8427e", $obj->md5(""));
    }

    /**
     * Tests staticMethodFunction()
     *
     * @return void
     */
    public function testStaticMethodFunction(): void {

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertEquals(null, $obj->staticMethodFunction(null, "exception"));
        $this->assertEquals(null, $obj->staticMethodFunction("exception", null));

        $this->assertEquals("\\" === DIRECTORY_SEPARATOR, $obj->staticMethodFunction("WBW\\Bundle\\CoreBundle\\Helper\\OSHelper", "isWindows"));
        $this->assertEquals('<div id="id">content</div>', $obj->staticMethodFunction("WBW\\Bundle\\CoreBundle\\Twig\\Extension\\AbstractTwigExtension", "coreHTMLElement", ["div", "content", ["id" => "id"]]));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.utility", UtilityTwigExtension::SERVICE_NAME);

        $obj = new UtilityTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
