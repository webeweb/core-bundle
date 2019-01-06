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

use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconEnumerator;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

class MaterialDesignIconicFontIconEnumeratorTest extends AbstractTestCase {

    /**
     * Tests the enumBorders() method.
     *
     * @return void.
     */
    public function testEnumBorders() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_BORDER_CIRCLE,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumBorders());
    }

    /**
     * Tests the enumFlips() method.
     *
     * @return void
     */
    public function testEnumFlips() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_FLIP_VERTICAL,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumFlips());
    }

    /**
     * Tests the enumPulls() method.
     *
     * @return void
     */
    public function testEnumPulls() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_PULL_RIGHT,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumPulls());
    }

    /**
     * Tests the enumRotates() method.
     *
     * @return void
     */
    public function testEnumRotates() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_180,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_270,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumRotates());
    }

    /**
     * Tests the enumSizes() method.
     *
     * @return void
     */
    public function testEnumSizes() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_2X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_3X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_4X,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SIZE_5X,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumSizes());
    }

    /**
     * Tests the enumSpins() method.
     *
     * @return void
     */
    public function testEnumSpins() {

        $res = [
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN,
            MaterialDesignIconicFontIconInterface::MATERIAL_DESIGN_ICONIC_FONT_SPIN_REVERSE,
        ];
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumSpins());
    }

}
