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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\WhiteColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestWhiteColorProviderTrait;

/**
 * White color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class WhiteColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setWhiteColorProvider() method.
     *
     * @return void
     */
    public function testSetWhiteColorProvider(): void {

        // Set an White color provider mock.
        $whiteColorProvider = new WhiteColorProvider();

        $obj = new TestWhiteColorProviderTrait();

        $obj->setWhiteColorProvider($whiteColorProvider);
        $this->assertSame($whiteColorProvider, $obj->getWhiteColorProvider());
    }
}
