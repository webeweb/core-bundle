<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Color\ColorInterface;
use WBW\Bundle\CoreBundle\Color\TealColorInterface;
use WBW\Bundle\CoreBundle\Color\TealColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Teal color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class TealColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors() {

        $obj = new TealColorProvider();

        $res = $obj->getColors();
        $this->assertCount(12, $res);

        $this->assertArrayHasKey(ColorInterface::COLOR_50, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_100, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_200, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_300, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_400, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_500, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_600, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_700, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A100, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A200, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A400, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_A700, $res);

        $this->assertEquals(TealColorInterface::COLOR_TEAL_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_700, $res[ColorInterface::COLOR_700]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_A100, $res[ColorInterface::COLOR_A100]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_A200, $res[ColorInterface::COLOR_A200]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_A400, $res[ColorInterface::COLOR_A400]);
        $this->assertEquals(TealColorInterface::COLOR_TEAL_A700, $res[ColorInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new TealColorProvider();

        $res = ColorInterface::COLOR_TEAL;
        $this->assertEquals($res, $obj->getName());
    }

}
