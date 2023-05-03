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

use Twig\Extension\ExtensionInterface;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\ContainerTwigExtension;

/**
 * Container Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class ContainerTwigExtensionTest extends AbstractTestCase {

    /**
     * Test coreNativeMethodFunction()
     *
     * @return void
     */
    public function testCoreNativeMethodFunction(): void {

        $obj = new ContainerTwigExtension($this->twigEnvironment, $this->containerBuilder);

        $this->assertEquals(null, $obj->coreNativeMethodFunction(null, ["exception"]));
        $this->assertEquals(null, $obj->coreNativeMethodFunction("exception", [null]));

        $this->assertEquals(false, $obj->coreNativeMethodFunction("is_array", ["isWindows"]));
        $this->assertEquals("'isWindows'", $obj->coreNativeMethodFunction("var_export", ["isWindows", true]));
    }

    /**
     * Test coreStaticMethodFunction()
     *
     * @return void
     */
    public function testCoreStaticMethodFunction(): void {

        $obj = new ContainerTwigExtension($this->twigEnvironment, $this->containerBuilder);

        $this->assertEquals(null, $obj->coreStaticMethodFunction(null, "exception"));
        $this->assertEquals(null, $obj->coreStaticMethodFunction("exception", null));
        $this->assertEquals(null, $obj->coreStaticMethodFunction("WBW\\Library\\System\\Helper\\SystemHelper", "isMacOs"));

        $this->assertEquals("\\" === DIRECTORY_SEPARATOR, $obj->coreStaticMethodFunction("WBW\\Library\\System\\Helper\\SystemHelper", "isWindows"));
        $this->assertEquals('<div id="id">content</div>', $obj->coreStaticMethodFunction("WBW\\Bundle\\CoreBundle\\Twig\\Extension\\AbstractTwigExtension", "coreHtmlElement", ["div", "content", ["id" => "id"]]));
    }

    /**
     * Test getContainerParameterFunction()
     *
     * @return void
     */
    public function testGetContainerParameterFunction(): void {

        $obj = new ContainerTwigExtension($this->twigEnvironment, $this->containerBuilder);

        $this->assertNotNull($obj->getContainerParameterFunction("kernel.project_dir"));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ContainerTwigExtension($this->twigEnvironment, $this->containerBuilder);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("getContainerParameter", $res[$i]->getName());
        $this->assertEquals([$obj, "getContainerParameterFunction"], $res[$i]->getCallable());

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreNativeMethod", $res[$i]->getName());
        $this->assertEquals([$obj, "coreNativeMethodFunction"], $res[$i]->getCallable());

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("coreStaticMethod", $res[$i]->getName());
        $this->assertEquals([$obj, "coreStaticMethodFunction"], $res[$i]->getCallable());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.container", ContainerTwigExtension::SERVICE_NAME);

        $obj = new ContainerTwigExtension($this->twigEnvironment, $this->containerBuilder);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->containerBuilder, $obj->getContainer());
    }
}
