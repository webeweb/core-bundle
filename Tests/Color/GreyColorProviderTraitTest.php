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

use WBW\Bundle\CoreBundle\Color\GreyColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestGreyColorProviderTrait;

/**
 * Grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestGreyColorProviderTrait();

        $this->assertNull($obj->getGreyColorProvider());
    }

    /**
     * Tests the setGreyColorProvider() method.
     *
     * @return void
     */
    public function testSetGreyColorProvider() {

        // Set a Grey color provider mock.
        $greyColorProvider = new GreyColorProvider();

        $obj = new TestGreyColorProviderTrait();

        $obj->setGreyColorProvider($greyColorProvider);
        $this->assertSame($greyColorProvider, $obj->getGreyColorProvider());
    }
}
