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

use WBW\Bundle\CoreBundle\Color\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestLightGreenColorProviderTrait;

/**
 * Light green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class LightGreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestLightGreenColorProviderTrait();

        $this->assertNull($obj->getLightGreenColorProvider());
    }

    /**
     * Tests the setLightGreenColorProvider() method.
     *
     * @return void
     */
    public function testSetLightGreenColorProvider() {

        // Set a Light green color provider mock.
        $lightGreenColorProvider = new LightGreenColorProvider();

        $obj = new TestLightGreenColorProviderTrait();

        $obj->setLightGreenColorProvider($lightGreenColorProvider);
        $this->assertSame($lightGreenColorProvider, $obj->getLightGreenColorProvider());
    }
}