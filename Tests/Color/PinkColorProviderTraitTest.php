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

use WBW\Bundle\CoreBundle\Color\PinkColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestPinkColorProviderTrait;

/**
 * Pink color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class PinkColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestPinkColorProviderTrait();

        $this->assertNull($obj->getPinkColorProvider());
    }

    /**
     * Tests the setPinkColorProvider() method.
     *
     * @return void
     */
    public function testSetPinkColorProvider() {

        // Set a Pink color provider mock.
        $pinkColorProvider = new PinkColorProvider();

        $obj = new TestPinkColorProviderTrait();

        $obj->setPinkColorProvider($pinkColorProvider);
        $this->assertSame($pinkColorProvider, $obj->getPinkColorProvider());
    }
}
