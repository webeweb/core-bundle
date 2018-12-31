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

use WBW\Bundle\CoreBundle\Color\AmberColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestAmberColorProviderTrait;

/**
 * Amber color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class AmberColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestAmberColorProviderTrait();

        $this->assertNull($obj->getAmberColorProvider());
    }

    /**
     * Tests the setAmberColorProvider() method.
     *
     * @return void
     */
    public function testSetAmberColorProvider() {

        // Set an Amber color provider mock.
        $amberColorProvider = new AmberColorProvider();

        $obj = new TestAmberColorProviderTrait();

        $obj->setAmberColorProvider($amberColorProvider);
        $this->assertSame($amberColorProvider, $obj->getAmberColorProvider());
    }
}
