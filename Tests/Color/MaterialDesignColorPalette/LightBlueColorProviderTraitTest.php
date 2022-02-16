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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestLightBlueColorProviderTrait;

/**
 * Light blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class LightBlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setLightBlueColorProvider()
     *
     * @return void
     */
    public function testSetLightBlueColorProvider(): void {

        // Set a Light blue color provider mock.
        $lightBlueColorProvider = new LightBlueColorProvider();

        $obj = new TestLightBlueColorProviderTrait();

        $obj->setLightBlueColorProvider($lightBlueColorProvider);
        $this->assertSame($lightBlueColorProvider, $obj->getLightBlueColorProvider());
    }
}
