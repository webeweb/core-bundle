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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestBrownColorProviderTrait;

/**
 * Brown color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class BrownColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBrownColorProvider()
     *
     * @return void
     */
    public function testSetBrownColorProvider(): void {

        // Set a Brown color provider mock.
        $brownColorProvider = new BrownColorProvider();

        $obj = new TestBrownColorProviderTrait();

        $obj->setBrownColorProvider($brownColorProvider);
        $this->assertSame($brownColorProvider, $obj->getBrownColorProvider());
    }
}
