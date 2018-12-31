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

use WBW\Bundle\CoreBundle\Color\GreyColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Grey color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreyColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#FAFAFA", GreyColorInterface::COLOR_GREY_50);
        $this->assertEquals("#F5F5F5", GreyColorInterface::COLOR_GREY_100);
        $this->assertEquals("#EEEEEE", GreyColorInterface::COLOR_GREY_200);
        $this->assertEquals("#E0E0E0", GreyColorInterface::COLOR_GREY_300);
        $this->assertEquals("#BDBDBD", GreyColorInterface::COLOR_GREY_400);
        $this->assertEquals("#9E9E9E", GreyColorInterface::COLOR_GREY_500);
        $this->assertEquals("#757575", GreyColorInterface::COLOR_GREY_600);
        $this->assertEquals("#616161", GreyColorInterface::COLOR_GREY_700);
        $this->assertEquals("#424242", GreyColorInterface::COLOR_GREY_800);
        $this->assertEquals("#212121", GreyColorInterface::COLOR_GREY_900);
    }

}