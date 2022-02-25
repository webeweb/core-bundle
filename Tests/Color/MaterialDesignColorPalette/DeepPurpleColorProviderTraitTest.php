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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestDeepPurpleColorProviderTrait;

/**
 * Deep purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class DeepPurpleColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setDeepPurpleColorProvider()
     *
     * @return void
     */
    public function testSetDeepPurpleColorProvider(): void {

        // Set an Deep purple color provider mock.
        $deepPurpleColorProvider = new DeepPurpleColorProvider();

        $obj = new TestDeepPurpleColorProviderTrait();

        $obj->setDeepPurpleColorProvider($deepPurpleColorProvider);
        $this->assertSame($deepPurpleColorProvider, $obj->getDeepPurpleColorProvider());
    }
}
