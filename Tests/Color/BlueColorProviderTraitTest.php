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

use WBW\Bundle\CoreBundle\Color\BlueColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestBlueColorProviderTrait;

/**
 * Blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class BlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestBlueColorProviderTrait();

        $this->assertNull($obj->getBlueColorProvider());
    }

    /**
     * Tests the setBlueColorProvider() method.
     *
     * @return void
     */
    public function testSetBlueColorProvider() {

        // Set a Blue color provider mock.
        $blueColorProvider = new BlueColorProvider();

        $obj = new TestBlueColorProviderTrait();

        $obj->setBlueColorProvider($blueColorProvider);
        $this->assertSame($blueColorProvider, $obj->getBlueColorProvider());
    }
}
