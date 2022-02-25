<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestJavascriptTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\JavascriptTwigExtension;

/**
 * Javascript Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class JavascriptTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setJavascriptTwigExtension()
     *
     * @return void
     */
    public function testSetJavascriptTwigExtension(): void {

        // Set a Javascript Twig extension mock.
        $javascriptTwigExtension = new JavascriptTwigExtension($this->twigEnvironment);

        $obj = new TestJavascriptTwigExtensionTrait();

        $obj->setJavascriptTwigExtension($javascriptTwigExtension);
        $this->assertSame($javascriptTwigExtension, $obj->getJavascriptTwigExtension());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestJavascriptTwigExtensionTrait();

        $this->assertNull($obj->getJavascriptTwigExtension());
    }
}
