<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use Exception;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterDefaults;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\SyntaxHighlighterTwigExtension;

/**
 * SyntaxHighlighter Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class SyntaxHighlighterTwigExtensionTest extends AbstractTestCase {

    /**
     * SyntaxHighlighter config.
     *
     * @var SyntaxHighlighterConfig
     */
    private $syntaxHighlighterConfig;

    /**
     * SyntaxHighlighter defaults.
     *
     * @var SyntaxHighlighterDefaults
     */
    private $syntaxHighlighterDefaults;

    /**
     * SyntaxHighlighter strings.
     *
     * @var SyntaxHighlighterStrings
     */
    private $syntaxHighlighterStrings;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig = new SyntaxHighlighterConfig();

        // Set a SyntaxHighlighter defauls mock.
        $this->syntaxHighlighterDefaults = new SyntaxHighlighterDefaults();

        // Set a SyntaxHighlighter strings mock.
        $this->syntaxHighlighterStrings = new SyntaxHighlighterStrings();
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("syntaxHighlighterScript", $res[0]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("shScript", $res[1]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("syntaxHighlighterConfig", $res[0]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterConfigFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("shConfig", $res[1]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterConfigFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("syntaxHighlighterContent", $res[2]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterContentFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("shContent", $res[3]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterContentFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("syntaxHighlighterDefaults", $res[4]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterDefaultsFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("shDefaults", $res[5]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterDefaultsFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("syntaxHighlighterScript", $res[6]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("shScript", $res[7]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("syntaxHighlighterStrings", $res[8]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterStringsFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("shStrings", $res[9]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterStringsFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));
    }

    /**
     * Tests the syntaxHighlighterConfigFunction() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterConfigFunction() {

        // Set the SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig->setBloggerMode(true);
        $this->syntaxHighlighterConfig->setStripBrs(true);
        $this->syntaxHighlighterConfig->setTagName("blockquote");

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterConfigFunction.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterConfigFunction($this->syntaxHighlighterConfig) . "\n");
    }

    /**
     * Tests the syntaxHighlighterConfigFunction() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterConfigFunctionWithStrings() {

        // Set the SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig->setBloggerMode(true);
        $this->syntaxHighlighterConfig->setStripBrs(true);
        $this->syntaxHighlighterConfig->setTagName("blockquote");

        $this->syntaxHighlighterConfig->setStrings($this->syntaxHighlighterStrings);

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterConfigFunctionWithStrings.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterConfigFunction($this->syntaxHighlighterConfig) . "\n");
    }

    /**
     * Tests the syntaxHighlighterContentFunction() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSyntaxHighlighterContentFunction() {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = ["content" => "<span>span</span>", "language" => "html"];
        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterContentFunction.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterContentFunction($arg) . "\n");
    }

    /**
     * Tests the syntaxHighlighterContentFunction() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterContentFunctionWithFileNotFoundException() {

        // Set a Filename mock.
        $filename = getcwd() . "/Tests/Twig/Extension/Asset/SyntaxHighlighterTwigExtensionTest";

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = ["filename" => $filename];

        try {

            $obj->syntaxHighlighterContentFunction($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertContains('core-bundle/Tests/Twig/Extension/Asset/SyntaxHighlighterTwigExtensionTest" could not be found', $ex->getMessage());
        }
    }

    /**
     * Tests the syntaxHighlighterContentFunction() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSyntaxHighlighterContentFunctionWithFilename() {

        // Set a Filename mock.
        $filename = getcwd() . "/Tests/Twig/Extension/Asset/SyntaxHighlighterTwigExtensionTest.txt";

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = ["filename" => $filename, "language" => "php"];
        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterContentFunctionWithFilename.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterContentFunction($arg) . "\n");
    }

    /**
     * Tests the syntaxHighlighterDefaultsFunction() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterDefaultsFunction() {

        // Set the SyntaxHighlighter defaults mock.
        $this->syntaxHighlighterDefaults->setAutoLinks(false);
        $this->syntaxHighlighterDefaults->setClassName("classname");
        $this->syntaxHighlighterDefaults->setCollapse(true);
        $this->syntaxHighlighterDefaults->setFirstLine(0);
        $this->syntaxHighlighterDefaults->setGutter(false);
        $this->syntaxHighlighterDefaults->setHighlight([1, 2, 3]);
        $this->syntaxHighlighterDefaults->setHtmlScript(true);
        $this->syntaxHighlighterDefaults->setSmartTabs(false);
        $this->syntaxHighlighterDefaults->setTabSize(8);
        $this->syntaxHighlighterDefaults->setToolbar(false);

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterDefaultsFunction.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterDefaultsFunction($this->syntaxHighlighterDefaults) . "\n");
    }

    /**
     * Tests the syntaxHighlighterScriptFilter() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterScriptFilter() {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = "<script type=\"text/javascript\">\ncontent\n</script>";
        $this->assertEquals($res, $obj->syntaxHighlighterScriptFilter("content"));
    }

    /**
     * Tests the syntaxHighlighterStringsFunction() method.
     *
     * @return void
     */
    public function testSyntaxHighlighterStringsFunction() {

        // Set the SyntaxHighlighter strings mock.
        $this->syntaxHighlighterStrings->setAlert("SyntaxHighlighter bundle");
        $this->syntaxHighlighterStrings->setBrushNotHtmlScript("Brush wasn't made for HTML-Script option :");
        $this->syntaxHighlighterStrings->setCopyToClipboard("Copy to clipboard");
        $this->syntaxHighlighterStrings->setCopyToClipboardConfirmation("Operation success");
        $this->syntaxHighlighterStrings->setExpandSource("Expand source");
        $this->syntaxHighlighterStrings->setHelp("Help");
        $this->syntaxHighlighterStrings->setNoBrush("Can't find brush for :");
        $this->syntaxHighlighterStrings->setPrint("Print");
        $this->syntaxHighlighterStrings->setViewSource("View source");

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = file_get_contents(__DIR__ . "/testSyntaxHighlighterStringsFunction.html.txt");
        $this->assertEquals($res, $obj->syntaxHighlighterStringsFunction($this->syntaxHighlighterStrings) . "\n");
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("wbw.core.twig.extension.asset.syntax_highlighter", SyntaxHighlighterTwigExtension::SERVICE_NAME);

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
