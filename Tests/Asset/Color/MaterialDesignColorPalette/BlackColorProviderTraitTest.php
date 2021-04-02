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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestBlackColorProviderTrait;

/**
 * Black color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BlackColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setBlackColorProvider() method.
     *
     * @return void
     */
    public function testSetBlackColorProvider(): void {

        // Set an Black color provider mock.
        $blackColorProvider = new BlackColorProvider();

        $obj = new TestBlackColorProviderTrait();

        $obj->setBlackColorProvider($blackColorProvider);
        $this->assertSame($blackColorProvider, $obj->getBlackColorProvider());
    }
}
