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
use WBW\Bundle\CoreBundle\Color\GreenColorInterface;
use WBW\Bundle\CoreBundle\Color\GreenColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Green color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreenColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors() {

        $obj = new GreenColorProvider();

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

        $this->assertEquals(GreenColorInterface::COLOR_GREEN_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_700, $res[ColorInterface::COLOR_700]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_A100, $res[ColorInterface::COLOR_A100]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_A200, $res[ColorInterface::COLOR_A200]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_A400, $res[ColorInterface::COLOR_A400]);
        $this->assertEquals(GreenColorInterface::COLOR_GREEN_A700, $res[ColorInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new GreenColorProvider();

        $res = ColorInterface::COLOR_GREEN;
        $this->assertEquals($res, $obj->getName());
    }

}
