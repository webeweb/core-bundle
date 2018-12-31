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

use WBW\Bundle\CoreBundle\Color\BrownColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Brown color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class BrownColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#EFEBE9", BrownColorInterface::COLOR_BROWN_50);
        $this->assertEquals("#D7CCC8", BrownColorInterface::COLOR_BROWN_100);
        $this->assertEquals("#BCAAA4", BrownColorInterface::COLOR_BROWN_200);
        $this->assertEquals("#A1887F", BrownColorInterface::COLOR_BROWN_300);
        $this->assertEquals("#8D6E63", BrownColorInterface::COLOR_BROWN_400);
        $this->assertEquals("#795548", BrownColorInterface::COLOR_BROWN_500);
        $this->assertEquals("#6D4C41", BrownColorInterface::COLOR_BROWN_600);
        $this->assertEquals("#5D4037", BrownColorInterface::COLOR_BROWN_700);
        $this->assertEquals("#4E342E", BrownColorInterface::COLOR_BROWN_800);
        $this->assertEquals("#3E2723", BrownColorInterface::COLOR_BROWN_900);
    }

}