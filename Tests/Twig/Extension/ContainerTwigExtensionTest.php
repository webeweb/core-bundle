<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Twig\Extension;

use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\ContainerTwigExtension;

/**
 * Container Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package Tests\Twig\Extension
 */
class ContainerTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests getContainerParameterFunction()
     *
     * @return void
     */
    public function testGetContainerParameterFunction(): void {

        $obj = new ContainerTwigExtension($this->containerBuilder);

        $this->assertNotNull($obj->getContainerParameterFunction("kernel.root_dir"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ContainerTwigExtension($this->containerBuilder);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ContainerTwigExtension($this->containerBuilder);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("getContainerParameter", $res[0]->getName());
        $this->assertEquals([$obj, "getContainerParameterFunction"], $res[0]->getCallable());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.twig.extension.container", ContainerTwigExtension::SERVICE_NAME);

        $obj = new ContainerTwigExtension($this->containerBuilder);

        $this->assertSame($this->containerBuilder, $obj->getContainer());
    }
}
