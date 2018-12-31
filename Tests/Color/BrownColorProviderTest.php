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

use WBW\Bundle\CoreBundle\Color\BrownColorProvider;
use WBW\Bundle\CoreBundle\Color\ColorInterface;
use WBW\Bundle\CoreBundle\Provider\Color\BrownColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Brown color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class BrownColorProviderTest extends AbstractTestCase {

    /**
     * Tests the getColors() method.
     *
     * @return void
     */
    public function testGetColors() {

        $obj = new BrownColorProvider();

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

        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_50, $res[ColorInterface::COLOR_50]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_100, $res[ColorInterface::COLOR_100]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_200, $res[ColorInterface::COLOR_200]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_300, $res[ColorInterface::COLOR_300]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_400, $res[ColorInterface::COLOR_400]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_500, $res[ColorInterface::COLOR_500]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_600, $res[ColorInterface::COLOR_600]);
        $this->assertEquals(BrownColorProviderInterface::COLOR_BROWN_700, $res[ColorInterface::COLOR_700]);
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $obj = new BrownColorProvider();

        $res = ColorInterface::COLOR_BROWN;
        $this->assertEquals($res, $obj->getName());
    }

}
