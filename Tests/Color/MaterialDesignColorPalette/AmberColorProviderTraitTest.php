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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestAmberColorProviderTrait;

/**
 * Amber color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class AmberColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setAmberColorProvider()
     *
     * @return void
     */
    public function testSetAmberColorProvider(): void {

        // Set an Amber color provider mock.
        $amberColorProvider = new AmberColorProvider();

        $obj = new TestAmberColorProviderTrait();

        $obj->setAmberColorProvider($amberColorProvider);
        $this->assertSame($amberColorProvider, $obj->getAmberColorProvider());
    }
}
