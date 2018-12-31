<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Color\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestPurpleColorProviderTrait;

/**
 * Purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
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
