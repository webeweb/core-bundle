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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestOrangeColorProviderTrait;

/**
 * Orange color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class OrangeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setOrangeColorProvider()
     *
     * @return void
     */
    public function testSetOrangeColorProvider(): void {

        // Set an Orange color provider mock.
        $orangeColorProvider = new OrangeColorProvider();

        $obj = new TestOrangeColorProviderTrait();

        $obj->setOrangeColorProvider($orangeColorProvider);
        $this->assertSame($orangeColorProvider, $obj->getOrangeColorProvider());
    }
}
