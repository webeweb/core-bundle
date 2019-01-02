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
use WBW\Bundle\CoreBundle\Color\TealColorProvider;
use WBW\Bundle\CoreBundle\Provider\Color\TealColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Teal color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class TealColorProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.core.provider.color.teal", TealColorProvider::SERVICE_NAME);
    }

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

        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_700, $res[ColorInterface::COLOR_700]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_A100, $res[ColorInterface::COLOR_A100]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_A200, $res[ColorInterface::COLOR_A200]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_A400, $res[ColorInterface::COLOR_A400]);
        $this->assertEquals(TealColorProviderInterface::TEAL_COLOR_A700, $res[ColorInterface::COLOR_A700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new TealColorProvider();

        $res = TealColorProviderInterface::TEAL_COLOR;
        $this->assertEquals($res, $obj->getName());
    }

}
