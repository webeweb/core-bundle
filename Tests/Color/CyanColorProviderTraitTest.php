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

use WBW\Bundle\CoreBundle\Color\CyanColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestCyanColorProviderTrait;

/**
 * Cyan color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class CyanColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestCyanColorProviderTrait();

        $this->assertNull($obj->getCyanColorProvider());
    }

    /**
     * Tests the setCyanColorProvider() method.
     *
     * @return void
     */
    public function testSetCyanColorProvider() {

        // Set a Cyan color provider mock.
        $cyanColorProvider = new CyanColorProvider();

        $obj = new TestCyanColorProviderTrait();

        $obj->setCyanColorProvider($cyanColorProvider);
        $this->assertSame($cyanColorProvider, $obj->getCyanColorProvider());
    }
}
