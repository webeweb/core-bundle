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

use WBW\Bundle\CoreBundle\Color\BrownColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestBrownColorProviderTrait;

/**
 * Brown color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class BrownColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestBrownColorProviderTrait();

        $this->assertNull($obj->getBrownColorProvider());
    }

    /**
     * Tests the setBrownColorProvider() method.
     *
     * @return void
     */
    public function testSetBrownColorProvider() {

        // Set a Brown color provider mock.
        $brownColorProvider = new BrownColorProvider();

        $obj = new TestBrownColorProviderTrait();

        $obj->setBrownColorProvider($brownColorProvider);
        $this->assertSame($brownColorProvider, $obj->getBrownColorProvider());
    }
}
