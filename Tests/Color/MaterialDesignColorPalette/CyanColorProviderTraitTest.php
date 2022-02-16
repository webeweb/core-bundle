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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestCyanColorProviderTrait;

/**
 * Cyan color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class CyanColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setCyanColorProvider()
     *
     * @return void
     */
    public function testSetCyanColorProvider(): void {

        // Set a Cyan color provider mock.
        $cyanColorProvider = new CyanColorProvider();

        $obj = new TestCyanColorProviderTrait();

        $obj->setCyanColorProvider($cyanColorProvider);
        $this->assertSame($cyanColorProvider, $obj->getCyanColorProvider());
    }
}
