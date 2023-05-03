<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets;

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;

/**
 * jQuery Input mask Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class JQueryInputMaskTwigExtensionTest extends AbstractTestCase {

    /**
     * Asset Twig extension.
     *
     * @var AssetsTwigExtension
     */
    private $rendererTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Assets Twig extension mock.
        $this->rendererTwigExtension = new AssetsTwigExtension($this->twigEnvironment);
    }

    /**
     * Test getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMask", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskPhoneNumber", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskPhoneNumberFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskSIRETNumber", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSIRETNumberFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskSocialSecurityNumber", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSocialSecurityNumberFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskTime12", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime12Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskTime24", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime24Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("jQueryInputMaskVATNumber", $res[$i]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskVATNumberFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test jQueryInputMaskFunction()
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
        $exp = "<script type=\"text/javascript\">\n$('#selector').inputmask(\"+33 9 99 99 99 99\",{\"placeholder\":\"+__ _ __ __ __ __\"});\n</script>";

        $this->assertEquals($exp, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Test jQueryInputMaskFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskFunctionWithoutOptions(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("",[]);';

        $this->assertEquals($exp, $obj->jQueryInputMaskFunction($arg));
    }

    /**
     * Test jQueryInputMaskPhoneNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskPhoneNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("99 99 99 99 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"__ __ __ __ __"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskPhoneNumberFunction($arg));
    }

    /**
     * Test jQueryInputMaskSIRETNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskSIRETNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("999 999 999 99999",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"___ ___ ___ _____"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskSIRETNumberFunction($arg));
    }

    /**
     * Test jQueryInputMaskSocialSecurityNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskSocialSecurityNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("9 99 99 99 999 999 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"_ __ __ __ ___ ___ __"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskSocialSecurityNumberFunction($arg));
    }

    /**
     * Test jQueryInputMaskTime12Function()
     *
     * @return void
     */
    public function testJQueryInputMaskTime12Function(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("hh:mm t",{"autoUnmask":true,"removeMaskOnSubmit":true,"hourFormat":"12","placeholder":"__:__ _m"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskTime12Function($arg));
    }

    /**
     * Test jQueryInputMaskTime24Function()
     *
     * @return void
     */
    public function testJQueryInputMaskTime24Function(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("hh:mm",{"autoUnmask":true,"removeMaskOnSubmit":true,"hourFormat":"24","placeholder":"__:__"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskTime24Function($arg));
    }

    /**
     * Test jQueryInputMaskVATNumberFunction()
     *
     * @return void
     */
    public function testJQueryInputMaskVATNumberFunction(): void {

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $arg = [
            "selector" => "#selector",
        ];
        $exp = '$(\'#selector\').inputmask("**999 999 999 99",{"autoUnmask":true,"removeMaskOnSubmit":true,"placeholder":"_____ ___ ___ __"});';

        $this->assertEquals($exp, $obj->jQueryInputMaskVATNumberFunction($arg));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.assets.jquery_inputmask", JQueryInputMaskTwigExtension::SERVICE_NAME);

        $obj = new JQueryInputMaskTwigExtension($this->twigEnvironment, $this->rendererTwigExtension);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->rendererTwigExtension, $obj->getAssetsTwigExtension());
    }
}
