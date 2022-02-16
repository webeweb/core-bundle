<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestBlueColorProviderTrait;

/**
 * Blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBlueColorProvider()
     *
     * @return void
     */
    public function testSetBlueColorProvider(): void {

        // Set a Blue color provider mock.
        $blueColorProvider = new BlueColorProvider();

        $obj = new TestBlueColorProviderTrait();

        $obj->setBlueColorProvider($blueColorProvider);
        $this->assertSame($blueColorProvider, $obj->getBlueColorProvider());
    }
}
