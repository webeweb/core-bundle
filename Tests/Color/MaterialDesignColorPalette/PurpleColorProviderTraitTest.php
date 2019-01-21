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

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette\TestPurpleColorProviderTrait;

/**
 * Purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color\MaterialDesignColorPalette
 */
class PurpleColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestPurpleColorProviderTrait();

        $this->assertNull($obj->getPurpleColorProvider());
    }

    /**
     * Tests the setPurpleColorProvider() method.
     *
     * @return void
     */
    public function testSetPurpleColorProvider() {

        // Set a Purple color provider mock.
        $purpleColorProvider = new PurpleColorProvider();

        $obj = new TestPurpleColorProviderTrait();

        $obj->setPurpleColorProvider($purpleColorProvider);
        $this->assertSame($purpleColorProvider, $obj->getPurpleColorProvider());
    }
}
