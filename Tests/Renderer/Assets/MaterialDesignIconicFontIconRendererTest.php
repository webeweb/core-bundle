<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Renderer\Assets;

use WBW\Bundle\CoreBundle\Assets\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Factory\IconFactory;
use WBW\Bundle\CoreBundle\Renderer\Assets\MaterialDesignIconicFontIconRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material Design Iconic Font icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Renderer\Assets
 */
class MaterialDesignIconicFontIconRendererTest extends AbstractTestCase {

    /**
     * Icon.
     *
     * @var MaterialDesignIconicFontIconInterface
     */
    private $icon;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Font Awesome icon mock.
        $this->icon = IconFactory::parseMaterialDesignIconicFontIcon([
            "name"       => "home",
            "style"      => "color: #000000;",
            "border"     => "border",
            "fixedWidth" => true,
            "flip"       => "horizontal",
            "pull"       => "left",
            "rotate"     => "90",
            "size"       => "lg",
            "spin"       => "spin",
        ]);
    }

    /**
     * Test renderBorder()
     *
     * @return void
     */
    public function testRenderBorder(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderBorder($this->icon);
        $this->assertEquals("zmdi-hc-border", $res);
    }

    /**
     * Test renderFixedWidth()
     *
     * @return void
     */
    public function testRenderFixedWidth(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderFixedWidth($this->icon);
        $this->assertEquals("zmdi-hc-fw", $res);
    }

    /**
     * Test renderFlip()
     *
     * @return void
     */
    public function testRenderFlip(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderFlip($this->icon);
        $this->assertEquals("zmdi-hc-flip-horizontal", $res);
    }

    /**
     * Test renderName()
     *
     * @return void
     */
    public function testRenderName(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderName($this->icon);
        $this->assertEquals("zmdi-home", $res);
    }

    /**
     * Test renderPull()
     *
     * @return void
     */
    public function testRenderPull(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderPull($this->icon);
        $this->assertEquals("pull-left", $res);
    }

    /**
     * Test renderRotate()
     *
     * @return void
     */
    public function testRenderRotate(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderRotate($this->icon);
        $this->assertEquals("zmdi-hc-rotate-90", $res);
    }

    /**
     * Test renderSize()
     *
     * @return void
     */
    public function testRenderSize(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderSize($this->icon);
        $this->assertEquals("zmdi-hc-lg", $res);
    }

    /**
     * Test renderSpin()
     *
     * @return void
     */
    public function testRenderSpin(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderSpin($this->icon);
        $this->assertEquals("zmdi-hc-spin", $res);
    }
}
