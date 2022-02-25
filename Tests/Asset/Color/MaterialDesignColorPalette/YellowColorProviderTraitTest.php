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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestYellowColorProviderTrait;

/**
 * Yellow color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class YellowColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setYellowColorProvider()
     *
     * @return void
     */
    public function testSetYellowColorProvider(): void {

        // Set a Yellow color provider mock.
        $yellowColorProvider = new YellowColorProvider();

        $obj = new TestYellowColorProviderTrait();

        $obj->setYellowColorProvider($yellowColorProvider);
        $this->assertSame($yellowColorProvider, $obj->getYellowColorProvider());
    }
}
