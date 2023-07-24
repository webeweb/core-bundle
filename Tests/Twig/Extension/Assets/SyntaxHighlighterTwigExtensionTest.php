<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Throwable;
use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Assets\SyntaxHighlighter\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Assets\SyntaxHighlighter\SyntaxHighlighterDefaults;
use WBW\Bundle\CoreBundle\Assets\SyntaxHighlighter\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\SyntaxHighlighterTwigExtension;

/**
 * SyntaxHighlighter Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
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
    protected function setUp(): void {
        parent::setUp();

        // Set a SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig = new SyntaxHighlighterConfig();

        // Set a SyntaxHighlighter defauls mock.
        $this->syntaxHighlighterDefaults = new SyntaxHighlighterDefaults();

        // Set a SyntaxHighlighter strings mock.
        $this->syntaxHighlighterStrings = new SyntaxHighlighterStrings();
    }

    /**
     * Test getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterScript", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("shScript", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterConfig", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterConfigFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("shConfig", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterConfigFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterContent", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterContentFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("shContent", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterContentFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterDefaults", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterDefaultsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("shDefaults", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterDefaultsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterScript", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("shScript", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterScriptFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("syntaxHighlighterStrings", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterStringsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("shStrings", $res[$i]->getName());
        $this->assertEquals([$obj, "syntaxHighlighterStringsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test syntaxHighlighterConfigFunction()
     *
     * @return void
     */
    public function testSyntaxHighlighterConfigFunction(): void {

        // Set the SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig->setBloggerMode(true);
        $this->syntaxHighlighterConfig->setStripBrs(true);
        $this->syntaxHighlighterConfig->setTagName("blockquote");

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterConfigFunction.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterConfigFunction($this->syntaxHighlighterConfig) . "\n");
    }

    /**
     * Test syntaxHighlighterConfigFunction()
     *
     * @return void
     */
    public function testSyntaxHighlighterConfigFunctionWithStrings(): void {

        // Set the SyntaxHighlighter config mock.
        $this->syntaxHighlighterConfig->setBloggerMode(true);
        $this->syntaxHighlighterConfig->setStripBrs(true);
        $this->syntaxHighlighterConfig->setTagName("blockquote");

        $this->syntaxHighlighterConfig->setStrings($this->syntaxHighlighterStrings);

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterConfigFunctionWithStrings.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterConfigFunction($this->syntaxHighlighterConfig) . "\n");
    }

    /**
     * Test syntaxHighlighterContentFunction()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSyntaxHighlighterContentFunction(): void {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = [
            "content"  => "<span>span</span>",
            "language" => "html",
        ];
        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterContentFunction.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterContentFunction($arg) . "\n");
    }

    /**
     * Test syntaxHighlighterContentFunction()
     *
     * @return void
     */
    public function testSyntaxHighlighterContentFunctionWithFileNotFoundException(): void {

        // Set a Filename mock.
        $filename = __DIR__ . "/SyntaxHighlighterTwigExtensionTest";

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = [
            "filename" => $filename,
        ];

        try {

            $obj->syntaxHighlighterContentFunction($arg);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertStringContainsString('/Tests/Twig/Extension/Assets/SyntaxHighlighterTwigExtensionTest" could not be found', $ex->getMessage());
        }
    }

    /**
     * Test syntaxHighlighterContentFunction()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSyntaxHighlighterContentFunctionWithFilename(): void {

        // Set a Filename mock.
        $filename = realpath(__DIR__ . "/SyntaxHighlighterTwigExtensionTest.txt");

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $arg = [
            "filename" => $filename,
            "language" => "php",
        ];
        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterContentFunctionWithFilename.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterContentFunction($arg) . "\n");
    }

    /**
     * Test syntaxHighlighterDefaultsFunction()
     *
     * @return void
     */
    public function testSyntaxHighlighterDefaultsFunction(): void {

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

        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterDefaultsFunction.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterDefaultsFunction($this->syntaxHighlighterDefaults) . "\n");
    }

    /**
     * Test syntaxHighlighterScriptFilter()
     *
     * @return void
     */
    public function testSyntaxHighlighterScriptFilter(): void {

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $exp = "<script type=\"text/javascript\">\ncontent\n</script>";

        $this->assertEquals($exp, $obj->syntaxHighlighterScriptFilter("content"));
    }

    /**
     * Test syntaxHighlighterStringsFunction()
     *
     * @return void
     */
    public function testSyntaxHighlighterStringsFunction(): void {

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

        $exp = file_get_contents(__DIR__ . "/testSyntaxHighlighterStringsFunction.html.txt");

        $this->assertEquals($exp, $obj->syntaxHighlighterStringsFunction($this->syntaxHighlighterStrings) . "\n");
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.assets.syntax_highlighter", SyntaxHighlighterTwigExtension::SERVICE_NAME);

        $obj = new SyntaxHighlighterTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
