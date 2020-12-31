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

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Plugin\TestJQueryInputMaskTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;

/**
 * jQuery InputMask Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class JQueryInputMaskTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setJQueryInputMaskTwigExtension() method.
     *
     * @return void
     */
    public function testSetJQueryInputMaskTwigExtension(): void {

        // Set a jQuery InputMask Twig extension mock.
        $jQueryInputMaskTwigExtension = new JQueryInputMaskTwigExtension($this->twigEnvironment, new RendererTwigExtension($this->twigEnvironment));

        $obj = new TestJQueryInputMaskTwigExtensionTrait();

        $obj->setJQueryInputMaskTwigExtension($jQueryInputMaskTwigExtension);
        $this->assertSame($jQueryInputMaskTwigExtension, $obj->getJQueryInputMaskTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestJQueryInputMaskTwigExtensionTrait();

        $this->assertNull($obj->getJQueryInputMaskTwigExtension());
    }
}
