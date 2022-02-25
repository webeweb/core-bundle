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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestPinkColorProviderTrait;

/**
 * Pink color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class PinkColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setPinkColorProvider()
     *
     * @return void
     */
    public function testSetPinkColorProvider(): void {

        // Set a Pink color provider mock.
        $pinkColorProvider = new PinkColorProvider();

        $obj = new TestPinkColorProviderTrait();

        $obj->setPinkColorProvider($pinkColorProvider);
        $this->assertSame($pinkColorProvider, $obj->getPinkColorProvider());
    }
}
