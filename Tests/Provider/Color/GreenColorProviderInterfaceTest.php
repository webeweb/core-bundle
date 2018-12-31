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

use WBW\Bundle\CoreBundle\Provider\Color\GreenColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Green color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class GreenColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E8F5E9", GreenColorProviderInterface::COLOR_GREEN_50);
        $this->assertEquals("#C8E6C9", GreenColorProviderInterface::COLOR_GREEN_100);
        $this->assertEquals("#A5D6A7", GreenColorProviderInterface::COLOR_GREEN_200);
        $this->assertEquals("#81C784", GreenColorProviderInterface::COLOR_GREEN_300);
        $this->assertEquals("#66BB6A", GreenColorProviderInterface::COLOR_GREEN_400);
        $this->assertEquals("#4CAF50", GreenColorProviderInterface::COLOR_GREEN_500);
        $this->assertEquals("#43A047", GreenColorProviderInterface::COLOR_GREEN_600);
        $this->assertEquals("#388E3C", GreenColorProviderInterface::COLOR_GREEN_700);
        $this->assertEquals("#2E7D32", GreenColorProviderInterface::COLOR_GREEN_800);
        $this->assertEquals("#1B5E20", GreenColorProviderInterface::COLOR_GREEN_900);
        $this->assertEquals("#B9F6CA", GreenColorProviderInterface::COLOR_GREEN_A100);
        $this->assertEquals("#69F0AE", GreenColorProviderInterface::COLOR_GREEN_A200);
        $this->assertEquals("#00E676", GreenColorProviderInterface::COLOR_GREEN_A400);
        $this->assertEquals("#00C853", GreenColorProviderInterface::COLOR_GREEN_A700);
    }

}
