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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestTealColorProviderTrait;

/**
 * Teal color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class TealColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setTealColorProvider() method.
     *
     * @return void
     */
    public function testSetTealColorProvider(): void {

        // Set a Teal color provider mock.
        $tealColorProvider = new TealColorProvider();

        $obj = new TestTealColorProviderTrait();

        $obj->setTealColorProvider($tealColorProvider);
        $this->assertSame($tealColorProvider, $obj->getTealColorProvider());
    }
}
