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
    protected function setUp() {
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
     * Tests the renderBorder() method.
     *
     * @return void
     */
    public function testRenderBorder() {

        $res = MaterialDesignIconicFontIconRenderer::renderBorder($this->icon);
        $this->assertEquals("zmdi-hc-border", $res);
    }

    /**
     * Tests the renderFixedWidth() method.
     *
     * @return void
     */
    public function testRenderFixedWidth() {

        $res = MaterialDesignIconicFontIconRenderer::renderFixedWidth($this->icon);
        $this->assertEquals("zmdi-hc-fw", $res);
    }

    /**
     * Tests the renderFlip() method.
     *
     * @return void
     */
    public function testRenderFlip() {

        $res = MaterialDesignIconicFontIconRenderer::renderFlip($this->icon);
        $this->assertEquals("zmdi-hc-flip-horizontal", $res);
    }

    /**
     * Tests the renderName() method.
     *
     * @return void
     */
    public function testRenderName() {

        $res = MaterialDesignIconicFontIconRenderer::renderName($this->icon);
        $this->assertEquals("zmdi-home", $res);
    }

    /**
     * Tests the renderPull() method.
     *
     * @return void
     */
    public function testRenderPull() {

        $res = MaterialDesignIconicFontIconRenderer::renderPull($this->icon);
        $this->assertEquals("pull-left", $res);
    }

    /**
     * Tests the renderRotate() method.
     *
     * @return void
     */
    public function testRenderRotate() {

        $res = MaterialDesignIconicFontIconRenderer::renderRotate($this->icon);
        $this->assertEquals("zmdi-hc-rotate-90", $res);
    }

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testRenderSize() {

        $res = MaterialDesignIconicFontIconRenderer::renderSize($this->icon);
        $this->assertEquals("zmdi-hc-lg", $res);
    }

    /**
     * Tests the renderSpin() method.
     *
     * @return void
     */
    public function testRenderSpin() {

        $res = MaterialDesignIconicFontIconRenderer::renderSpin($this->icon);
        $this->assertEquals("zmdi-hc-spin", $res);
    }
}
