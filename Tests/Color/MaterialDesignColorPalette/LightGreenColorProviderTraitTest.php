<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestLightGreenColorProviderTrait;

/**
 * Light green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class LightGreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setLightGreenColorProvider() method.
     *
     * @return void
     */
    public function testSetLightGreenColorProvider(): void {

        // Set a Light green color provider mock.
        $lightGreenColorProvider = new LightGreenColorProvider();

        $obj = new TestLightGreenColorProviderTrait();

        $obj->setLightGreenColorProvider($lightGreenColorProvider);
        $this->assertSame($lightGreenColorProvider, $obj->getLightGreenColorProvider());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestLightGreenColorProviderTrait();

        $this->assertNull($obj->getLightGreenColorProvider());
    }
}
