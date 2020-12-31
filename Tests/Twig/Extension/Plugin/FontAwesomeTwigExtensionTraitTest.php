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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Plugin\TestFontAwesomeTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;

/**
 * Font Awesome Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class FontAwesomeTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setFontAwesomeTwigExtension() method.
     *
     * @return void
     */
    public function testSetFontAwesomeTwigExtension(): void {

        // Set a Font Awesome Twig extension mock.
        $fontAwesomeTwigExtension = new FontAwesomeTwigExtension($this->twigEnvironment);

        $obj = new TestFontAwesomeTwigExtensionTrait();

        $obj->setFontAwesomeTwigExtension($fontAwesomeTwigExtension);
        $this->assertSame($fontAwesomeTwigExtension, $obj->getFontAwesomeTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestFontAwesomeTwigExtensionTrait();

        $this->assertNull($obj->getFontAwesomeTwigExtension());
    }
}
