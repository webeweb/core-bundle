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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestGreyColorProviderTrait;

/**
 * Grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class GreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setGreyColorProvider()
     *
     * @return void
     */
    public function testSetGreyColorProvider(): void {

        // Set a Grey color provider mock.
        $greyColorProvider = new GreyColorProvider();

        $obj = new TestGreyColorProviderTrait();

        $obj->setGreyColorProvider($greyColorProvider);
        $this->assertSame($greyColorProvider, $obj->getGreyColorProvider());
    }
}
