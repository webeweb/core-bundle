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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestIndigoColorProviderTrait;

/**
 * Indigo color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class IndigoColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setIndigoColorProvider()
     *
     * @return void
     */
    public function testSetIndigoColorProvider(): void {

        // Set an Indigo color provider mock.
        $indigoColorProvider = new IndigoColorProvider();

        $obj = new TestIndigoColorProviderTrait();

        $obj->setIndigoColorProvider($indigoColorProvider);
        $this->assertSame($indigoColorProvider, $obj->getIndigoColorProvider());
    }
}
