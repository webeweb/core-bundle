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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestBlueGreyColorProviderTrait;

/**
 * Blue grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BlueGreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setBlueGreyColorProvider() method.
     *
     * @return void
     */
    public function testSetBlueGreyColorProvider(): void {

        // Set an Blue grey color provider mock.
        $blueGreyColorProvider = new BlueGreyColorProvider();

        $obj = new TestBlueGreyColorProviderTrait();

        $obj->setBlueGreyColorProvider($blueGreyColorProvider);
        $this->assertSame($blueGreyColorProvider, $obj->getBlueGreyColorProvider());
    }
}
