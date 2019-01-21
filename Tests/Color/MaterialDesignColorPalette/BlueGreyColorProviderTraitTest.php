<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestBlueGreyColorProviderTrait;

/**
 * Blue grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class BlueGreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestBlueGreyColorProviderTrait();

        $this->assertNull($obj->getBlueGreyColorProvider());
    }

    /**
     * Tests the setBlueGreyColorProvider() method.
     *
     * @return void
     */
    public function testSetBlueGreyColorProvider() {

        // Set an Blue grey color provider mock.
        $blueGreyColorProvider = new BlueGreyColorProvider();

        $obj = new TestBlueGreyColorProviderTrait();

        $obj->setBlueGreyColorProvider($blueGreyColorProvider);
        $this->assertSame($blueGreyColorProvider, $obj->getBlueGreyColorProvider());
    }
}
