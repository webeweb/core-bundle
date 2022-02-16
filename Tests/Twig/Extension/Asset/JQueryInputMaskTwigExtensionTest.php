<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;

/**
 * jQuery Input mask Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class JQueryInputMaskTwigExtensionTest extends AbstractTestCase {

    /**
     * Renderer Twig extension.
     *
     * @var RendererTwigExtension
     */
    private $rendererTwigExtension;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Renderer Twig extension mock.
        $this->rendererTwigExtension = new RendererTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("jQueryInputMask", $res[0]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("jQueryInputMaskPhoneNumber", $res[1]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskPhoneNumberFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("jQueryInputMaskSIRETNumber", $res[2]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSIRETNumberFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("jQueryInputMaskSocialSecurityNumber", $res[3]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSocialSecurityNumberFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("jQueryInputMaskTime12", $res[4]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime12Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("jQueryInputMaskTime24", $res[5]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime24Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("jQueryInputMaskVATNumber", $res[6]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskVATNumberFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));
    }

    /**
     * Tests jQueryInputMaskFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector"  => "#selector",
            "mask"      => "+33 9 99 99 99 99",
            "scriptTag" => true,
            "opts"      => [
                "placeholder" => "+__ _ __ __ __ __",
            ],
        ];

        $res = "<script type=\"text/javascript\">\n$('#selector').inputmask(\"+33 9 99 99 99 99\",{\"placeholder\":\"+__ _ __ __ __ __\"});\n</script>";
        $this->assertEquals($res, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Tests jQueryInputMaskFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskFunctionWithoutOptions(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("",[]);';
        $this->assertEquals($res, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Tests jQueryInputMaskPhoneNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskPhoneNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("99 99 99 99 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"__ __ __ __ __"});';
        $this->assertEquals($res, $obj->jQueryInputMaskPhoneNumberFunction($arg));
    }

    /**
     * Tests jQueryInputMaskSIRETNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskSIRETNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("999 999 999 99999",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"___ ___ ___ _____"});';
        $this->assertEquals($res, $obj->jQueryInputMaskSIRETNumberFunction($arg));
    }

    /**
     * Tests jQueryInputMaskSocialSecurityNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskSocialSecurityNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("9 99 99 99 999 999 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"_ __ __ __ ___ ___ __"});';
        $this->assertEquals($res, $obj->jQueryInputMaskSocialSecurityNumberFunction($arg));
    }

    /**
     * Tests jQueryInputMaskTime12Function()
     *
     * @return void
     */
    public function testJQueryInputMaskTime12Function(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("hh:mm t",{"autoUnmask":true,"removeMaskOnSubmit":true,"hourFormat":"12","placeholder":"__:__ _m"});';
        $this->assertEquals($res, $obj->jQueryInputMaskTime12Function($arg));
    }

    /**
     * Tests jQueryInputMaskTime24Function()
     *
     * @return void
     */
    public function testJQueryInputMaskTime24Function(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("hh:mm",{"autoUnmask":true,"removeMaskOnSubmit":true,"hourFormat":"24","placeholder":"__:__"});';
        $this->assertEquals($res, $obj->jQueryInputMaskTime24Function($arg));
    }

    /**
     * Tests jQueryInputMaskVATNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskVATNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];

        $res = '$(\'#selector\').inputmask("**999 999 999 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"_____ ___ ___ __"});';
        $this->assertEquals($res, $obj->jQueryInputMaskVATNumberFunction($arg));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.asset.jquery_inputmask", JQueryInputMaskTwigExtension::SERVICE_NAME);

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->rendererTwigExtension, $obj->getRendererTwigExtension());
    }
}
