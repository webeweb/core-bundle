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

use Exception;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Quote\YamlQuoteProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\QuoteTwigExtension;

/**
 * Quote Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class QuoteTwigExtensionTest extends AbstractTestCase {

    /**
     * Quote manager.
     *
     * @var QuoteManager
     */
    private $quoteManager;

    /**
     * Quote provider.
     *
     * @var QuoteProviderInterface
     */
    private $quoteProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $filename = getcwd() . "/Resources/translations/WorldsWisdom.fr.yml";

        // Set a Quote provider mock.
        $this->quoteProvider = new YamlQuoteProvider($filename);

        // Set a Quote manager mock.
        $this->quoteManager = new QuoteManager($this->logger);
        $this->quoteManager->addProvider($this->quoteProvider);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("quote", $res[0]->getName());
        $this->assertEquals([$obj, "quoteFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("quoteAuthor", $res[1]->getName());
        $this->assertEquals([$obj, "quoteAuthorFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("quoteContent", $res[2]->getName());
        $this->assertEquals([$obj, "quoteContentFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));
    }

    /**
     * Tests quoteAuthorFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteAuthorFunction(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertNotNull($obj->quoteAuthorFunction());
    }

    /**
     * Tests quoteAuthorFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteAuthorFunctionWithBadDomain(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertEquals("", $obj->quoteAuthorFunction("github"));
    }

    /**
     * Tests quoteContentFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteContentFunction(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertNotNull($obj->quoteContentFunction());
    }

    /**
     * Tests quoteContentFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteContentFunctionWithBadDomain(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertEquals("", $obj->quoteContentFunction("github"));
    }

    /**
     * Tests quoteFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteFunction(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $res = $obj->quoteFunction();
        $this->assertNotNull($res);

        $this->assertSame($res, $obj->quoteFunction("WorldsWisdom.fr"));
        $this->assertSame($res, $obj->quoteFunction());
    }

    /**
     * Tests quoteFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteFunctionWithBadDomain(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertNull($obj->quoteFunction("github"));
    }

    /**
     * Tests quoteFunction()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testQuoteFunctionWithoutProvider(): void {

        $obj = new QuoteTwigExtension($this->twigEnvironment, new QuoteManager($this->logger));

        $this->assertNull($obj->quoteFunction());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.quote", QuoteTwigExtension::SERVICE_NAME);

        $obj = new QuoteTwigExtension($this->twigEnvironment, $this->quoteManager);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->quoteManager, $obj->getQuoteManager());
    }
}
