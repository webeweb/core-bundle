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

use WBW\Bundle\CoreBundle\Color\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestLightBlueColorProviderTrait;

/**
 * Light blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class LightBlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestLightBlueColorProviderTrait();

        $this->assertNull($obj->getLightBlueColorProvider());
    }

    /**
     * Tests the setLightBlueColorProvider() method.
     *
     * @return void
     */
    public function testSetLightBlueColorProvider() {

        // Set a Light blue color provider mock.
        $lightBlueColorProvider = new LightBlueColorProvider();

        $obj = new TestLightBlueColorProviderTrait();

        $obj->setLightBlueColorProvider($lightBlueColorProvider);
        $this->assertSame($lightBlueColorProvider, $obj->getLightBlueColorProvider());
    }
}