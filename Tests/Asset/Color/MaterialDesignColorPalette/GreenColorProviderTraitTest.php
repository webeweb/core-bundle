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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestGreenColorProviderTrait;

/**
 * Green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class GreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setGreenColorProvider() method.
     *
     * @return void
     */
    public function testSetGreenColorProvider(): void {

        // Set a Green color provider mock.
        $greenColorProvider = new GreenColorProvider();

        $obj = new TestGreenColorProviderTrait();

        $obj->setGreenColorProvider($greenColorProvider);
        $this->assertSame($greenColorProvider, $obj->getGreenColorProvider());
    }
}
