<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Assets\Icon;

use WBW\Bundle\CoreBundle\Assets\Icon\MaterialDesignIconicFontIcon;
use WBW\Bundle\CoreBundle\Assets\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material Design Iconic Font icon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Assets\Icon
 */
class MaterialDesignIconicFontIconTest extends AbstractTestCase {

    /**
     * Tests enumBorders()
     *
     * @return void.
     */
    public function testEnumBorders(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER_CIRCLE,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumBorders());
    }

    /**
     * Tests enumFlips()
     *
     * @return void
     */
    public function testEnumFlips(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_VERTICAL,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumFlips());
    }

    /**
     * Tests enumPulls()
     *
     * @return void
     */
    public function testEnumPulls(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_RIGHT,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumPulls());
    }

    /**
     * Tests enumRotates()
     *
     * @return void
     */
    public function testEnumRotates(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_180,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_270,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumRotates());
    }

    /**
     * Tests enumSizes()
     *
     * @return void
     */
    public function testEnumSizes(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_2X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_3X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_4X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_5X,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumSizes());
    }

    /**
     * Tests enumSpins()
     *
     * @return void
     */
    public function testEnumSpins(): void {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN_REVERSE,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIcon::enumSpins());
    }

    /**
     * Tests setBorder()
     *
     * @return void
     */
    public function testSetBorder(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setBorder(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_BORDER);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_BORDER, $obj->getBorder());
    }

    /**
     * Tests setBorder()
     *
     * @return void
     */
    public function testSetBorderWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setBorder("exception");
        $this->assertNotEquals("exception", $obj->getBorder());
    }

    /**
     * Tests setFixedWidth()
     *
     * @return void
     */
    public function testSetFixedWidth(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFixedWidth(true);
        $this->assertTrue($obj->getFixedWidth());
    }

    /**
     * Tests setFlip()
     *
     * @return void
     */
    public function testSetFlip(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFlip(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL, $obj->getFlip());
    }

    /**
     * Tests setFlip()
     *
     * @return void
     */
    public function testSetFlipWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFlip("exception");
        $this->assertNotEquals("exception", $obj->getFlip());
    }

    /**
     * Tests setPull()
     *
     * @return void
     */
    public function testSetPull(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setPull(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT, $obj->getPull());
    }

    /**
     * Tests setPull()
     *
     * @return void
     */
    public function testSetPullWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setPull("exception");
        $this->assertNotEquals("exception", $obj->getPull());
    }

    /**
     * Tests setRotate()
     *
     * @return void
     */
    public function testSetRotate(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setRotate(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90, $obj->getRotate());
    }

    /**
     * Tests setRotate()
     *
     * @return void
     */
    public function testSetRotateWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setRotate("exception");
        $this->assertNotEquals("exception", $obj->getRotate());
    }

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSize(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSizeWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSize("exception");
        $this->assertNotEquals("exception", $obj->getSize());
    }

    /**
     * Tests setSpin()
     *
     * @return void
     */
    public function testSetSpin(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSpin(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SPIN);
        $this->assertEquals(MaterialDesignIconicFontIcon::MATERIAL_DESIGN_ICONIC_FONT_SPIN, $obj->getSpin());
    }

    /**
     * Tests setSpin()
     *
     * @return void
     */
    public function testSetSpinWithBadArgument(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSpin("exception");
        $this->assertNotEquals("exception", $obj->getSpin());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MaterialDesignIconicFontIcon();

        $this->assertNull($obj->getBorder());
        $this->assertFalse($obj->getFixedWidth());
        $this->assertNull($obj->getFlip());
        $this->assertNull($obj->getPull());
        $this->assertNull($obj->getRotate());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getSpin());
    }
}
