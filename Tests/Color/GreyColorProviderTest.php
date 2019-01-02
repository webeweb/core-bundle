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
use WBW\Bundle\CoreBundle\Color\GreyColorProvider;
use WBW\Bundle\CoreBundle\Provider\Color\GreyColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Grey color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreyColorProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.core.provider.color.grey", GreyColorProvider::SERVICE_NAME);
    }

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors() {

        $obj = new GreyColorProvider();

        $res = $obj->getColors();
        $this->assertCount(8, $res);

        $this->assertArrayHasKey(ColorInterface::COLOR_50, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_100, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_200, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_300, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_400, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_500, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_600, $res);
        $this->assertArrayHasKey(ColorInterface::COLOR_700, $res);

        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(GreyColorProviderInterface::GREY_COLOR_700, $res[ColorInterface::COLOR_700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new GreyColorProvider();

        $res = GreyColorProviderInterface::GREY_COLOR;
        $this->assertEquals($res, $obj->getName());
    }

}
