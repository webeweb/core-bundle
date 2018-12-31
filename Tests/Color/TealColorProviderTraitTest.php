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

use WBW\Bundle\CoreBundle\Color\TealColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestTealColorProviderTrait;

/**
 * Teal color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class TealColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestTealColorProviderTrait();

        $this->assertNull($obj->getTealColorProvider());
    }

    /**
     * Tests the setTealColorProvider() method.
     *
     * @return void
     */
    public function testSetTealColorProvider() {

        // Set a Teal color provider mock.
        $tealColorProvider = new TealColorProvider();

        $obj = new TestTealColorProviderTrait();

        $obj->setTealColorProvider($tealColorProvider);
        $this->assertSame($tealColorProvider, $obj->getTealColorProvider());
    }
}
