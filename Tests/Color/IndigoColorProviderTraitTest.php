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

use WBW\Bundle\CoreBundle\Color\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestIndigoColorProviderTrait;

/**
 * Indigo color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class IndigoColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestIndigoColorProviderTrait();

        $this->assertNull($obj->getIndigoColorProvider());
    }

    /**
     * Tests the setIndigoColorProvider() method.
     *
     * @return void
     */
    public function testSetIndigoColorProvider() {

        // Set an Indigo color provider mock.
        $indigoColorProvider = new IndigoColorProvider();

        $obj = new TestIndigoColorProviderTrait();

        $obj->setIndigoColorProvider($indigoColorProvider);
        $this->assertSame($indigoColorProvider, $obj->getIndigoColorProvider());
    }
}
