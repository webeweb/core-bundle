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

        $this->assertEquals("green", GreenColorProviderInterface::GREEN_COLOR_NAME);

        $this->assertEquals("#E8F5E9", GreenColorProviderInterface::GREEN_COLOR_50);
        $this->assertEquals("#C8E6C9", GreenColorProviderInterface::GREEN_COLOR_100);
        $this->assertEquals("#A5D6A7", GreenColorProviderInterface::GREEN_COLOR_200);
        $this->assertEquals("#81C784", GreenColorProviderInterface::GREEN_COLOR_300);
        $this->assertEquals("#66BB6A", GreenColorProviderInterface::GREEN_COLOR_400);
        $this->assertEquals("#4CAF50", GreenColorProviderInterface::GREEN_COLOR_500);
        $this->assertEquals("#43A047", GreenColorProviderInterface::GREEN_COLOR_600);
        $this->assertEquals("#388E3C", GreenColorProviderInterface::GREEN_COLOR_700);
        $this->assertEquals("#2E7D32", GreenColorProviderInterface::GREEN_COLOR_800);
        $this->assertEquals("#1B5E20", GreenColorProviderInterface::GREEN_COLOR_900);
        $this->assertEquals("#B9F6CA", GreenColorProviderInterface::GREEN_COLOR_A100);
        $this->assertEquals("#69F0AE", GreenColorProviderInterface::GREEN_COLOR_A200);
        $this->assertEquals("#00E676", GreenColorProviderInterface::GREEN_COLOR_A400);
        $this->assertEquals("#00C853", GreenColorProviderInterface::GREEN_COLOR_A700);
    }
}
