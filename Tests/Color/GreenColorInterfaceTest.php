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

use WBW\Bundle\CoreBundle\Color\GreenColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Green color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreenColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E8F5E9", GreenColorInterface::COLOR_GREEN_50);
        $this->assertEquals("#C8E6C9", GreenColorInterface::COLOR_GREEN_100);
        $this->assertEquals("#A5D6A7", GreenColorInterface::COLOR_GREEN_200);
        $this->assertEquals("#81C784", GreenColorInterface::COLOR_GREEN_300);
        $this->assertEquals("#66BB6A", GreenColorInterface::COLOR_GREEN_400);
        $this->assertEquals("#4CAF50", GreenColorInterface::COLOR_GREEN_500);
        $this->assertEquals("#43A047", GreenColorInterface::COLOR_GREEN_600);
        $this->assertEquals("#388E3C", GreenColorInterface::COLOR_GREEN_700);
        $this->assertEquals("#2E7D32", GreenColorInterface::COLOR_GREEN_800);
        $this->assertEquals("#1B5E20", GreenColorInterface::COLOR_GREEN_900);
        $this->assertEquals("#B9F6CA", GreenColorInterface::COLOR_GREEN_A100);
        $this->assertEquals("#69F0AE", GreenColorInterface::COLOR_GREEN_A200);
        $this->assertEquals("#00E676", GreenColorInterface::COLOR_GREEN_A400);
        $this->assertEquals("#00C853", GreenColorInterface::COLOR_GREEN_A700);
    }

}
