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

use WBW\Bundle\CoreBundle\Color\DeepPurpleColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Deep purple color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class DeepPurpleColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#EDE7F6", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_50);
        $this->assertEquals("#D1C4E9", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_100);
        $this->assertEquals("#B39DDB", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_200);
        $this->assertEquals("#9575CD", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_300);
        $this->assertEquals("#7E57C2", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_400);
        $this->assertEquals("#673AB7", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_500);
        $this->assertEquals("#5E35B1", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_600);
        $this->assertEquals("#512DA8", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_700);
        $this->assertEquals("#4527A0", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_800);
        $this->assertEquals("#311B92", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_900);
        $this->assertEquals("#B388FF", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_A100);
        $this->assertEquals("#7C4DFF", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_A200);
        $this->assertEquals("#651FFF", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_A400);
        $this->assertEquals("#6200EA", DeepPurpleColorInterface::COLOR_DEEP_PURPLE_A700);
    }

}
