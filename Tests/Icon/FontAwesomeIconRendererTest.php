<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Icon;

use WBW\Bundle\CoreBundle\Icon\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Icon\FontAwesomeIconRenderer;
use WBW\Bundle\CoreBundle\Icon\IconParser;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Font Awesome icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon
 */
class FontAwesomeIconRendererTest extends AbstractTestCase {

    /**
     * Font Awesome icon.
     *
     * @var FontAwesomeIconInterface
     */
    private $fontAwesomeIcon;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Font Awesome icon mock.
        $this->fontAwesomeIcon = IconParser::parseFontAwesomeIcon([
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
    public function testRenderAnimation() {

        $res = FontAwesomeIconRenderer::renderAnimation($this->fontAwesomeIcon);
        $this->assertEquals("fa-spin", $res);
    }

    /**
     * Tests the renderBordered() method.
     *
     * @return void
     */
    public function testRenderBordered() {

        $res = FontAwesomeIconRenderer::renderBordered($this->fontAwesomeIcon);
        $this->assertEquals("fa-border", $res);
    }

    /**
     * Tests the renderFixedWidth() method.
     *
     * @return void
     */
    public function testRenderFixedWidth() {

        $res = FontAwesomeIconRenderer::renderFixedWidth($this->fontAwesomeIcon);
        $this->assertEquals("fa-fw", $res);
    }

    /**
     * Tests the renderFont() method.
     *
     * @return void
     */
    public function testRenderFont() {

        $res = FontAwesomeIconRenderer::renderFont($this->fontAwesomeIcon);
        $this->assertEquals("fas", $res);
    }

    /**
     * Tests the renderName() method.
     *
     * @return void
     */
    public function testRenderName() {

        $res = FontAwesomeIconRenderer::renderName($this->fontAwesomeIcon);
        $this->assertEquals("fa-home", $res);
    }

    /**
     * Tests the renderPull() method.
     *
     * @return void
     */
    public function testRenderPull() {

        $res = FontAwesomeIconRenderer::renderPull($this->fontAwesomeIcon);
        $this->assertEquals("fa-pull-left", $res);
    }

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testRenderSize() {

        $res = FontAwesomeIconRenderer::renderSize($this->fontAwesomeIcon);
        $this->assertEquals("fa-lg", $res);
    }

}
