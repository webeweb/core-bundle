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

use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIcon;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Font Awesome icon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Icon\FontAwesome
 */
class FontAwesomeIconTest extends AbstractTestCase {

    /**
     * Tests setAnimation()
     *
     * @return void
     */
    public function testSetAnimation(): void {

        $obj = new FontAwesomeIcon();

        $obj->setAnimation(FontAwesomeIcon::FONT_AWESOME_ANIMATION_PULSE);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_ANIMATION_PULSE, $obj->getAnimation());
    }

    /**
     * Tests setAnimation()
     *
     * @return void
     */
    public function testSetAnimationWithBadArgument(): void {

        $obj = new FontAwesomeIcon();

        $obj->setAnimation("exception");
        $this->assertNotEquals("exception", $obj->getAnimation());
    }

    /**
     * Tests setBordered()
     *
     * @return void
     */
    public function testSetBordered(): void {

        $obj = new FontAwesomeIcon();

        $obj->setBordered(true);
        $this->assertTrue($obj->getBordered());
    }

    /**
     * Tests setFixedWidth()
     *
     * @return void
     */
    public function testSetFixedWidth(): void {

        $obj = new FontAwesomeIcon();

        $obj->setFixedWidth(true);
        $this->assertTrue($obj->getFixedWidth());
    }

    /**
     * Tests setFont()
     *
     * @return void
     */
    public function testSetFont(): void {

        $obj = new FontAwesomeIcon();

        $obj->setFont(FontAwesomeIcon::FONT_AWESOME_FONT);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_FONT, $obj->getFont());
    }

    /**
     * Tests setFont()
     *
     * @return void
     */
    public function testSetFontWithBadArgument(): void {

        $obj = new FontAwesomeIcon();

        $obj->setFont("exception");
        $this->assertNotEquals("exception", $obj->getFont());
    }

    /**
     * Tests setPull()
     *
     * @return void
     */
    public function testSetPull(): void {

        $obj = new FontAwesomeIcon();

        $obj->setPull(FontAwesomeIcon::FONT_AWESOME_PULL_LEFT);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_PULL_LEFT, $obj->getPull());
    }

    /**
     * Tests setPull()
     *
     * @return void
     */
    public function testSetPullWithBadArgument(): void {

        $obj = new FontAwesomeIcon();

        $obj->setPull("exception");
        $this->assertNotEquals("exception", $obj->getPull());
    }

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new FontAwesomeIcon();

        $obj->setSize(FontAwesomeIcon::FONT_AWESOME_SIZE_LG);
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSizeWithBadArgument(): void {

        $obj = new FontAwesomeIcon();

        $obj->setSize("exception");
        $this->assertNotEquals("exception", $obj->getSize());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FontAwesomeIcon();

        $this->assertNull($obj->getAnimation());
        $this->assertFalse($obj->getBordered());
        $this->assertFalse($obj->getFixedWidth());
        $this->assertEquals(FontAwesomeIcon::FONT_AWESOME_FONT, $obj->getFont());
        $this->assertNull($obj->getPull());
        $this->assertNull($obj->getSize());
    }
}
