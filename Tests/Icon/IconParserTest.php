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
use WBW\Bundle\CoreBundle\Icon\IconParser;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Icon parser test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon
 */
class IconParserTest extends AbstractTestCase {

    /**
     * Tests the parseFontAwesomeIcon() method.
     *
     * @return void
     */
    public function testParseFontAwesomeIcon() {

        // Set the Arguments mock.
        $arg = [
            "name"       => "camera-retro",
            "style"      => "color: #000000;",
            "animation"  => "spin",
            "bordered"   => true,
            "fixedWidth" => true,
            "font"       => "s",
            "pull"       => "left",
            "size"       => "lg",
        ];

        $obj = IconParser::parseFontAwesomeIcon($arg);
        $this->assertNotNull($obj);
        $this->assertInstanceOf(FontAwesomeIconInterface::class, $obj);

        $this->assertEquals($arg["name"], $obj->getName());
        $this->assertEquals($arg["style"], $obj->getStyle());

        $this->assertEquals($arg["animation"], $obj->getAnimation());
        $this->assertEquals($arg["bordered"], $obj->getBordered());
        $this->assertEquals($arg["fixedWidth"], $obj->getFixedWidth());
        $this->assertEquals($arg["font"], $obj->getFont());
        $this->assertEquals($arg["pull"], $obj->getPull());
        $this->assertEquals($arg["size"], $obj->getSize());
    }

}
