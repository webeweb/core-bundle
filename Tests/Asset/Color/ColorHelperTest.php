<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Color;

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\ColorHelper;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\AmberColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BlackColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BlueColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BlueGreyColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\BrownColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\CyanColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\DeepOrangeColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\DeepPurpleColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\GreenColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\GreyColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\IndigoColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\LightBlueColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\LightGreenColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\LimeColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\OrangeColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\PinkColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\PurpleColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\RedColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\TealColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\WhiteColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\Color\YellowColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color
 */
class ColorHelperTest extends AbstractTestCase {

    /**
     * Tests the getIdentifier() method.
     *
     * @return void
     */
    public function testGetIdentifier(): void {

        // Set a Color provider mock.
        $colorProvider = new RedColorProvider();

        $res = implode(":", ["MaterialDesignColorPalette", "red"]);
        $this->assertEquals($res, ColorHelper::getIdentifier($colorProvider));
    }

    /**
     * Tests the getMaterialDesignColorPalette() method.
     *
     * @return void
     */
    public function testGetMaterialDesignColorPalette(): void {

        $res = ColorHelper::getMaterialDesignColorPalette();
        $this->assertCount(21, $res);

        $this->assertInstanceOf(RedColorProviderInterface::class, $res[0]);
        $this->assertInstanceOf(PinkColorProviderInterface::class, $res[1]);
        $this->assertInstanceOf(PurpleColorProviderInterface::class, $res[2]);
        $this->assertInstanceOf(DeepPurpleColorProviderInterface::class, $res[3]);
        $this->assertInstanceOf(IndigoColorProviderInterface::class, $res[4]);
        $this->assertInstanceOf(BlueColorProviderInterface::class, $res[5]);
        $this->assertInstanceOf(LightBlueColorProviderInterface::class, $res[6]);
        $this->assertInstanceOf(CyanColorProviderInterface::class, $res[7]);
        $this->assertInstanceOf(TealColorProviderInterface::class, $res[8]);
        $this->assertInstanceOf(GreenColorProviderInterface::class, $res[9]);
        $this->assertInstanceOf(LightGreenColorProviderInterface::class, $res[10]);
        $this->assertInstanceOf(LimeColorProviderInterface::class, $res[11]);
        $this->assertInstanceOf(YellowColorProviderInterface::class, $res[12]);
        $this->assertInstanceOf(AmberColorProviderInterface::class, $res[13]);
        $this->assertInstanceOf(OrangeColorProviderInterface::class, $res[14]);
        $this->assertInstanceOf(DeepOrangeColorProviderInterface::class, $res[15]);
        $this->assertInstanceOf(BrownColorProviderInterface::class, $res[16]);
        $this->assertInstanceOf(GreyColorProviderInterface::class, $res[17]);
        $this->assertInstanceOf(BlueGreyColorProviderInterface::class, $res[18]);
        $this->assertInstanceOf(BlackColorProviderInterface::class, $res[19]);
        $this->assertInstanceOf(WhiteColorProviderInterface::class, $res[20]);
    }
}
