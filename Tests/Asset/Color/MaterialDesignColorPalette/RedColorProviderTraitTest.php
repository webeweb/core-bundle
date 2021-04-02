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

use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Color\MaterialDesignColorPalette\TestRedColorProviderTrait;

/**
 * Red color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Color\MaterialDesignColorPalette
 */
class RedColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setRedColorProvider() method.
     *
     * @return void
     */
    public function testSetRedColorProvider(): void {

        // Set an Red color provider mock.
        $redColorProvider = new RedColorProvider();

        $obj = new TestRedColorProviderTrait();

        $obj->setRedColorProvider($redColorProvider);
        $this->assertSame($redColorProvider, $obj->getRedColorProvider());
    }
}
