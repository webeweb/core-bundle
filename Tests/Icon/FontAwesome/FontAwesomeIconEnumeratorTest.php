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

use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconEnumerator;
use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Font Awesome icon enumerator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\FontAwesome
 */
class FontAwesomeIconEnumeratorTest extends AbstractTestCase {

    /**
     * Tests enumAnimations()
     *
     * @return void
     */
    public function testEnumAnimations(): void {

        $res = [
            FontAwesomeIconInterface::FONT_AWESOME_ANIMATION_PULSE,
            FontAwesomeIconInterface::FONT_AWESOME_ANIMATION_SPIN,
        ];
        $this->assertEquals($res, FontAwesomeIconEnumerator::enumAnimations());
    }

    /**
     * Tests enumFonts()
     *
     * @return void
     */
    public function testEnumFonts(): void {

        $res = [
            FontAwesomeIconInterface::FONT_AWESOME_FONT,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_BOLD,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_LIGHT,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_REGULAR,
            FontAwesomeIconInterface::FONT_AWESOME_FONT_SOLID,
        ];
        $this->assertEquals($res, FontAwesomeIconEnumerator::enumFonts());
    }

    /**
     * Tests enumPulls()
     *
     * @return void
     */
    public function testEnumPulls(): void {

        $res = [
            FontAwesomeIconInterface::FONT_AWESOME_PULL_LEFT,
            FontAwesomeIconInterface::FONT_AWESOME_PULL_RIGHT,
        ];
        $this->assertEquals($res, FontAwesomeIconEnumerator::enumPulls());
    }

    /**
     * Tests the enumSizes() mmethod.
     *
     * @return void
     */
    public function testEnumSizes(): void {

        $res = [
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_LG,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_SM,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_XS,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_2X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_3X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_4X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_5X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_6X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_7X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_8X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_9X,
            FontAwesomeIconInterface::FONT_AWESOME_SIZE_10X,
        ];
        $this->assertEquals($res, FontAwesomeIconEnumerator::enumSizes());
    }
}
