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

use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIcon;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material design iconic font icon test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon
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
     * Tests the setBorder() mmethod.
     *
     * @return void
     */
    public function testSetBorder() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setBorder("border");
        $this->assertEquals("border", $obj->getBorder());
    }

    /**
     * Tests the setFixedWidth() mmethod.
     *
     * @return void
     */
    public function testSetFixedWidth() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFixedWidth(true);
        $this->assertTrue($obj->getFixedWidth());
    }

    /**
     * Tests the setFlip() mmethod.
     *
     * @return void
     */
    public function testSetFlip() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setFlip("flip");
        $this->assertEquals("flip", $obj->getFlip());
    }

    /**
     * Tests the setPull() mmethod.
     *
     * @return void
     */
    public function testSetPull() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setPull("pull");
        $this->assertEquals("pull", $obj->getPull());
    }

    /**
     * Tests the setRotate() mmethod.
     *
     * @return void
     */
    public function testSetRotate() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setRotate("rotate");
        $this->assertEquals("rotate", $obj->getRotate());
    }

    /**
     * Tests the setSize() mmethod.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSize("size");
        $this->assertEquals("size", $obj->getSize());
    }

    /**
     * Tests the setSpin() mmethod.
     *
     * @return void
     */
    public function testSetSpin() {

        $obj = new MaterialDesignIconicFontIcon();

        $obj->setSpin("spin");
        $this->assertEquals("spin", $obj->getSpin());
    }

}
