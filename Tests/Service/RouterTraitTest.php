<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestRouterTrait;

/**
 * Router trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class RouterTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestRouterTrait();

        $this->assertNull($obj->getRouter());
    }

    /**
     * Tests the setRouter() method.
     *
     * @return void
     */
    public function testSetRouter() {

        $obj = new TestRouterTrait();

        $obj->setRouter($this->router);
        $this->assertSame($this->router, $obj->getRouter());
    }

}
