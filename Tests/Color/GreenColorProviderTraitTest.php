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

use WBW\Bundle\CoreBundle\Color\GreenColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestGreenColorProviderTrait;

/**
 * Green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class GreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestGreenColorProviderTrait();

        $this->assertNull($obj->getGreenColorProvider());
    }

    /**
     * Tests the setGreenColorProvider() method.
     *
     * @return void
     */
    public function testSetGreenColorProvider() {

        // Set a Green color provider mock.
        $greenColorProvider = new GreenColorProvider();

        $obj = new TestGreenColorProviderTrait();

        $obj->setGreenColorProvider($greenColorProvider);
        $this->assertSame($greenColorProvider, $obj->getGreenColorProvider());
    }
}
