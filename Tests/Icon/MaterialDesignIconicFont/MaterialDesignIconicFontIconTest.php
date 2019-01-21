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

use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIcon;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material design iconic font icon test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\MaterialDesignIconicFont
 */
class MaterialDesignIconicFontIconTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MaterialDesignIconicFontIcon();

        $this->assertNull($obj->getBorder());
        $this->assertFalse($obj->getFixedWidth());
        $this->assertNull($obj->getFlip());
        $this->assertNull($obj->getPull());
        $this->assertNull($obj->getRotate());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getSpin());
    }

    /**
     * Tests the setBorder() method.
     *
     * @return void
     */
    public function testSetBorder() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setBorder(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_BORDER);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_BORDER, $obj->getBorder());
    }

    /**
     * Tests the setBorder() method.
     *
     * @return void
     */
    public function testSetBorderWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setBorder("exception");
        $this->assertNotEquals("exception", $obj->getBorder());
    }

    /**
     * Tests the setFixedWidth() method.
     *
     * @return void
     */
    public function testSetFixedWidth() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFixedWidth(true);
        $this->assertTrue($obj->getFixedWidth());
    }

    /**
     * Tests the setFlip() method.
     *
     * @return void
     */
    public function testSetFlip() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFlip(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL, $obj->getFlip());
    }

    /**
     * Tests the setFlip() method.
     *
     * @return void
     */
    public function testSetFlipWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFlip("exception");
        $this->assertNotEquals("exception", $obj->getFlip());
    }

    /**
     * Tests the setPull() method.
     *
     * @return void
     */
    public function testSetPull() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setPull(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT, $obj->getPull());
    }

    /**
     * Tests the setPull() method.
     *
     * @return void
     */
    public function testSetPullWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setPull("exception");
        $this->assertNotEquals("exception", $obj->getPull());
    }

    /**
     * Tests the setRotate() method.
     *
     * @return void
     */
    public function testSetRotate() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setRotate(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90, $obj->getRotate());
    }

    /**
     * Tests the setRotate() method.
     *
     * @return void
     */
    public function testSetRotateWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setRotate("exception");
        $this->assertNotEquals("exception", $obj->getRotate());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSize(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSizeWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSize("exception");
        $this->assertNotEquals("exception", $obj->getSize());
    }

    /**
     * Tests the setSpin() method.
     *
     * @return void
     */
    public function testSetSpin() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSpin(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SPIN);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SPIN, $obj->getSpin());
    }

    /**
     * Tests the setSpin() method.
     *
     * @return void
     */
    public function testSetSpinWithBadArgument() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSpin("exception");
        $this->assertNotEquals("exception", $obj->getSpin());
    }
}
