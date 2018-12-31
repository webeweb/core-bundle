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

use WBW\Bundle\CoreBundle\Color\LimeColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Lime color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class LimeColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#F9FBE7", LimeColorInterface::COLOR_LIME_50);
        $this->assertEquals("#F0F4C3", LimeColorInterface::COLOR_LIME_100);
        $this->assertEquals("#E6EE9C", LimeColorInterface::COLOR_LIME_200);
        $this->assertEquals("#DCE775", LimeColorInterface::COLOR_LIME_300);
        $this->assertEquals("#D4E157", LimeColorInterface::COLOR_LIME_400);
        $this->assertEquals("#CDDC39", LimeColorInterface::COLOR_LIME_500);
        $this->assertEquals("#C0CA33", LimeColorInterface::COLOR_LIME_600);
        $this->assertEquals("#AFB42B", LimeColorInterface::COLOR_LIME_700);
        $this->assertEquals("#9E9D24", LimeColorInterface::COLOR_LIME_800);
        $this->assertEquals("#827717", LimeColorInterface::COLOR_LIME_900);
        $this->assertEquals("#F4FF81", LimeColorInterface::COLOR_LIME_A100);
        $this->assertEquals("#EEFF41", LimeColorInterface::COLOR_LIME_A200);
        $this->assertEquals("#C6FF00", LimeColorInterface::COLOR_LIME_A400);
        $this->assertEquals("#AEEA00", LimeColorInterface::COLOR_LIME_A700);
    }

}
