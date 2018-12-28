<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;

/**
 * jQuery Input mask Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class JQueryInputMaskTwigExtensionTest extends AbstractTestCase {

    /**
     * Renderer Twig extension.
     *
     * @var RendererTwigExtension
     */
    private $rendererTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Renderer Twig extension mock.
        $this->rendererTwigExtension = new RendererTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $this->assertEquals("webeweb.core.twig.extension.plugin.jquery_inputmask", JQueryInputMaskTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->rendererTwigExtension, $obj->getRendererTwigExtension());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("jQueryInputMask", $res[0]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("jQueryInputMaskPhoneNumber", $res[1]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskPhoneNumberFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("jQueryInputMaskSIRETNumber", $res[2]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSIRETNumberFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("jQueryInputMaskSocialSecurityNumber", $res[3]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSocialSecurityNumberFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("jQueryInputMaskTime12", $res[4]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime12Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("jQueryInputMaskTime24", $res[5]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime24Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("jQueryInputMaskVATNumber", $res[6]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskVATNumberFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the jQueryInputMaskFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskFunction() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector", "mask" => "+33 9 99 99 99 99", "scriptTag" => true, "opts" => ["placeholder" => "+__ _ __ __ __ __"]];
        $res = "<script type=\"text/javascript\">\n$('#selector').inputmask(\"+33 9 99 99 99 99\",{\"placeholder\":\"+__ _ __ __ __ __\"});\n</script>";
        $this->assertEquals($res, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskFunctionWithoutOptions() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"\",[]);";
        $this->assertEquals($res, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskPhoneNumberFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskPhoneNumberFunction() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"99 99 99 99 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"__ __ __ __ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskPhoneNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskSIRETNumberFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskSIRETNumberFunction() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"999 999 999 99999\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"___ ___ ___ _____\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskSIRETNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskSocialSecurityNumberFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskSocialSecurityNumberFunction() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"9 99 99 99 999 999 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"_ __ __ __ ___ ___ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskSocialSecurityNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskTime12Function() method.
     *
     * @return void
     */
    public function testJQueryInputMaskTime12Function() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"hh:mm t\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"hourFormat\":\"12\",\"placeholder\":\"__:__ _m\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskTime12Function($arg));
    }

    /**
     * Tests the jQueryInputMaskTime24Function() method.
     *
     * @return void
     */
    public function testJQueryInputMaskTime24Function() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"hh:mm\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"hourFormat\":\"24\",\"placeholder\":\"__:__\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskTime24Function($arg));
    }

    /**
     * Tests the jQueryInputMaskVATNumberFunction() method.
     *
     * @return void
     */
    public function testJQueryInputMaskVATNumberFunction() {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"**999 999 999 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"_____ ___ ___ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskVATNumberFunction($arg));
    }

}
