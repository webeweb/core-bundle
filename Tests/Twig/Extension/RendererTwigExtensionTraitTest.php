<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestRendererTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestRendererTwigExtensionTrait();

        $this->assertNull($obj->getRendererTwigExtension());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        // Set a Renderer Twig extension mock.
        $rendererTwigExtension = new RendererTwigExtension($this->twigEnvironment);

        $obj = new TestRendererTwigExtensionTrait();

        $obj->setRendererTwigExtension($rendererTwigExtension);
        $this->assertSame($rendererTwigExtension, $obj->getRendererTwigExtension());
    }

}
