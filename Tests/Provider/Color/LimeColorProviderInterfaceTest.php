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

use WBW\Bundle\CoreBundle\Provider\Color\LimeColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Lime color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class LimeColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#F9FBE7", LimeColorProviderInterface::COLOR_LIME_50);
        $this->assertEquals("#F0F4C3", LimeColorProviderInterface::COLOR_LIME_100);
        $this->assertEquals("#E6EE9C", LimeColorProviderInterface::COLOR_LIME_200);
        $this->assertEquals("#DCE775", LimeColorProviderInterface::COLOR_LIME_300);
        $this->assertEquals("#D4E157", LimeColorProviderInterface::COLOR_LIME_400);
        $this->assertEquals("#CDDC39", LimeColorProviderInterface::COLOR_LIME_500);
        $this->assertEquals("#C0CA33", LimeColorProviderInterface::COLOR_LIME_600);
        $this->assertEquals("#AFB42B", LimeColorProviderInterface::COLOR_LIME_700);
        $this->assertEquals("#9E9D24", LimeColorProviderInterface::COLOR_LIME_800);
        $this->assertEquals("#827717", LimeColorProviderInterface::COLOR_LIME_900);
        $this->assertEquals("#F4FF81", LimeColorProviderInterface::COLOR_LIME_A100);
        $this->assertEquals("#EEFF41", LimeColorProviderInterface::COLOR_LIME_A200);
        $this->assertEquals("#C6FF00", LimeColorProviderInterface::COLOR_LIME_A400);
        $this->assertEquals("#AEEA00", LimeColorProviderInterface::COLOR_LIME_A700);
    }

}
