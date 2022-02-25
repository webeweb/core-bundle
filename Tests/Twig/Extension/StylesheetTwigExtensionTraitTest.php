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

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestStylesheetTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\StylesheetTwigExtension;

/**
 * Stylesheet Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StylesheetTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setStylesheetTwigExtension()
     *
     * @return void
     */
    public function testSetStylesheetTwigExtension(): void {

        // Set a Stylesheet Twig extension mock.
        $stylesheetTwigExtension = new StylesheetTwigExtension($this->twigEnvironment);

        $obj = new TestStylesheetTwigExtensionTrait();

        $obj->setStylesheetTwigExtension($stylesheetTwigExtension);
        $this->assertSame($stylesheetTwigExtension, $obj->getStylesheetTwigExtension());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStylesheetTwigExtensionTrait();

        $this->assertNull($obj->getStylesheetTwigExtension());
    }
}
