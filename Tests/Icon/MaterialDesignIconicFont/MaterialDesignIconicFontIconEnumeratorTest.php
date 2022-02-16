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

use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIconEnumerator;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Material Design Iconic Font icon enumerator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\MaterialDesignIconicFont
 */
class MaterialDesignIconicFontIconEnumeratorTest extends AbstractTestCase {

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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumBorders());
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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumFlips());
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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumPulls());
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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumRotates());
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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumSizes());
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
        $this->assertEquals($res, MaterialDesignIconicFontIconEnumerator::enumSpins());
    }
}
