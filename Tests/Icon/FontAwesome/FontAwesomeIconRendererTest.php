<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Icon\FontAwesome;

use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconRenderer;
use WBW\Bundle\CoreBundle\Icon\IconFactory;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Font Awesome icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\FontAwesome
 */
class FontAwesomeIconRendererTest extends AbstractTestCase {

    /**
     * Icon.
     *
     * @var FontAwesomeIconInterface
     */
    private $icon;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Font Awesome icon mock.
        $this->icon = IconFactory::parseFontAwesomeIcon([
            "name"       => "home",
            "style"      => "color: #000000;",
            "animation"  => "spin",
            "bordered"   => true,
            "fixedWidth" => true,
            "font"       => "s",
            "pull"       => "left",
            "size"       => "lg",
        ]);
    }

    /**
     * Tests the renderAnimation() method.
     *
     * @return void
     */
    public function testRenderAnimation(): void {

        $res = FontAwesomeIconRenderer::renderAnimation($this->icon);
        $this->assertEquals("fa-spin", $res);
    }

    /**
     * Tests the renderBordered() method.
     *
     * @return void
     */
    public function testRenderBordered(): void {

        $res = FontAwesomeIconRenderer::renderBordered($this->icon);
        $this->assertEquals("fa-border", $res);
    }

    /**
     * Tests the renderFixedWidth() method.
     *
     * @return void
     */
    public function testRenderFixedWidth(): void {

        $res = FontAwesomeIconRenderer::renderFixedWidth($this->icon);
        $this->assertEquals("fa-fw", $res);
    }

    /**
     * Tests the renderFont() method.
     *
     * @return void
     */
    public function testRenderFont(): void {

        $res = FontAwesomeIconRenderer::renderFont($this->icon);
        $this->assertEquals("fas", $res);
    }

    /**
     * Tests the renderName() method.
     *
     * @return void
     */
    public function testRenderName(): void {

        $res = FontAwesomeIconRenderer::renderName($this->icon);
        $this->assertEquals("fa-home", $res);
    }

    /**
     * Tests the renderPull() method.
     *
     * @return void
     */
    public function testRenderPull(): void {

        $res = FontAwesomeIconRenderer::renderPull($this->icon);
        $this->assertEquals("fa-pull-left", $res);
    }

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testRenderSize(): void {

        $res = FontAwesomeIconRenderer::renderSize($this->icon);
        $this->assertEquals("fa-lg", $res);
    }
}
