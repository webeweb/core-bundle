<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Icon\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Icon\IconFactory;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIconRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material Design Iconic Font icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\MaterialDesignIconicFont
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
     * Tests renderBorder()
     *
     * @return void
     */
    public function testRenderBorder(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderBorder($this->icon);
        $this->assertEquals("zmdi-hc-border", $res);
    }

    /**
     * Tests renderFixedWidth()
     *
     * @return void
     */
    public function testRenderFixedWidth(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderFixedWidth($this->icon);
        $this->assertEquals("zmdi-hc-fw", $res);
    }

    /**
     * Tests renderFlip()
     *
     * @return void
     */
    public function testRenderFlip(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderFlip($this->icon);
        $this->assertEquals("zmdi-hc-flip-horizontal", $res);
    }

    /**
     * Tests renderName()
     *
     * @return void
     */
    public function testRenderName(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderName($this->icon);
        $this->assertEquals("zmdi-home", $res);
    }

    /**
     * Tests renderPull()
     *
     * @return void
     */
    public function testRenderPull(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderPull($this->icon);
        $this->assertEquals("pull-left", $res);
    }

    /**
     * Tests renderRotate()
     *
     * @return void
     */
    public function testRenderRotate(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderRotate($this->icon);
        $this->assertEquals("zmdi-hc-rotate-90", $res);
    }

    /**
     * Tests renderSize()
     *
     * @return void
     */
    public function testRenderSize(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderSize($this->icon);
        $this->assertEquals("zmdi-hc-lg", $res);
    }

    /**
     * Tests renderSpin()
     *
     * @return void
     */
    public function testRenderSpin(): void {

        $res = MaterialDesignIconicFontIconRenderer::renderSpin($this->icon);
        $this->assertEquals("zmdi-hc-spin", $res);
    }
}
