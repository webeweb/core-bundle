<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\Color\BlueGreyColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Blue grey color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class BlueGreyColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#ECEFF1", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_50);
        $this->assertEquals("#CFD8DC", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_100);
        $this->assertEquals("#B0BEC5", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_200);
        $this->assertEquals("#90A4AE", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_300);
        $this->assertEquals("#78909C", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_400);
        $this->assertEquals("#607D8B", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_500);
        $this->assertEquals("#546E7A", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_600);
        $this->assertEquals("#455A64", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_700);
        $this->assertEquals("#37474F", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_800);
        $this->assertEquals("#263238", BlueGreyColorProviderInterface::COLOR_BLUE_GREY_900);
    }

}
