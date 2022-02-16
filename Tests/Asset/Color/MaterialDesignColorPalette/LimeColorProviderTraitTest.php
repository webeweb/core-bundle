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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestLimeColorProviderTrait;

/**
 * Lime color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class LimeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setLimeColorProvider()
     *
     * @return void
     */
    public function testSetLimeColorProvider(): void {

        // Set a Lime color provider mock.
        $limeColorProvider = new LimeColorProvider();

        $obj = new TestLimeColorProviderTrait();

        $obj->setLimeColorProvider($limeColorProvider);
        $this->assertSame($limeColorProvider, $obj->getLimeColorProvider());
    }
}
