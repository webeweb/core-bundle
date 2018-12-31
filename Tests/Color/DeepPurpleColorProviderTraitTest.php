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

use WBW\Bundle\CoreBundle\Color\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestDeepPurpleColorProviderTrait;

/**
 * Deep purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class DeepPurpleColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestDeepPurpleColorProviderTrait();

        $this->assertNull($obj->getDeepPurpleColorProvider());
    }

    /**
     * Tests the setDeepPurpleColorProvider() method.
     *
     * @return void
     */
    public function testSetDeepPurpleColorProvider() {

        // Set an Deep purple color provider mock.
        $deepPurpleColorProvider = new DeepPurpleColorProvider();

        $obj = new TestDeepPurpleColorProviderTrait();

        $obj->setDeepPurpleColorProvider($deepPurpleColorProvider);
        $this->assertSame($deepPurpleColorProvider, $obj->getDeepPurpleColorProvider());
    }
}
