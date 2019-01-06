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

use WBW\Bundle\CoreBundle\Icon\FontAwesomeIcon;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Font Awesome icon test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon
 */
class FontAwesomeIconTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FontAwesomeIcon();

        $this->assertNull($obj->getAnimation());
        $this->assertFalse($obj->getBordered());
        $this->assertFalse($obj->getFixedWidth());
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_FONT, $obj->getFont());
        $this->assertNull($obj->getPull());
        $this->assertNull($obj->getSize());
    }

    /**
     * Tests the setAnimation() method.
     *
     * @return void
     */
    public function testSetAnimation() {

        $obj = new FontAwesomeIcon();

        $obj->setAnimation(FontAwesomeIcon::FONT_AWESOME_ANIMATION_PULSE);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_ANIMATION_PULSE, $obj->getAnimation());
    }

    /**
     * Tests the setAnimation() method.
     *
     * @return void
     */
    public function testSetAnimationWithBadArgument() {

        $obj = new FontAwesomeIcon();

        $obj->setAnimation("animation");
        $this->assertNotEquals("animation", $obj->getAnimation());
    }

    /**
     * Tests the setBordered() method.
     *
     * @return void
     */
    public function testSetBordered() {

        $obj = new FontAwesomeIcon();

        $obj->setBordered(true);
        $this->assertTrue($obj->getBordered());
    }

    /**
     * Tests the setFixedWidth() method.
     *
     * @return void
     */
    public function testSetFixedWidth() {

        $obj = new FontAwesomeIcon();

        $obj->setFixedWidth(true);
        $this->assertTrue($obj->getFixedWidth());
    }

    /**
     * Tests the setFont() method.
     *
     * @return void
     */
    public function testSetFont() {

        $obj = new FontAwesomeIcon();

        $obj->setFont(FontAwesomeIcon::FONT_AWESOME_FONT);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_FONT, $obj->getFont());
    }

    /**
     * Tests the setFont() method.
     *
     * @return void
     */
    public function testSetFontWithBadArgument() {

        $obj = new FontAwesomeIcon();

        $obj->setFont("font");
        $this->assertNotEquals("font", $obj->getFont());
    }

    /**
     * Tests the setPull() method.
     *
     * @return void
     */
    public function testSetPull() {

        $obj = new FontAwesomeIcon();

        $obj->setPull(FontAwesomeIcon::FONT_AWESOME_PULL_LEFT);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_PULL_LEFT, $obj->getPull());
    }

    /**
     * Tests the setPull() method.
     *
     * @return void
     */
    public function testSetPullWithBadArgument() {

        $obj = new FontAwesomeIcon();

        $obj->setPull("pull");
        $this->assertNotEquals("pull", $obj->getPull());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new FontAwesomeIcon();

        $obj->setSize(FontAwesomeIcon::FONT_AWESOME_SIZE_LG);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSizeWithBadArgument() {

        $obj = new FontAwesomeIcon();

        $obj->setSize("size");
        $this->assertNotEquals("size", $obj->getSize());
    }

}
