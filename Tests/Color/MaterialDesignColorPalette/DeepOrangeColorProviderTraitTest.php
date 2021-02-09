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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestDeepOrangeColorProviderTrait;

/**
 * Deep orange color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class DeepOrangeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setDeepOrangeColorProvider() method.
     *
     * @return void
     */
    public function testSetDeepOrangeColorProvider(): void {

        // Set a Deep orange color provider mock.
        $deepOrangeColorProvider = new DeepOrangeColorProvider();

        $obj = new TestDeepOrangeColorProviderTrait();

        $obj->setDeepOrangeColorProvider($deepOrangeColorProvider);
        $this->assertSame($deepOrangeColorProvider, $obj->getDeepOrangeColorProvider());
    }
}
