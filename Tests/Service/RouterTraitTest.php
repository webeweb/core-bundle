<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestRouterTrait;

/**
 * Router trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class RouterTraitTest extends AbstractTestCase {

    /**
     * Tests setRouter()
     *
     * @return void
     */
    public function testSetRouter(): void {

        $obj = new TestRouterTrait();

        $obj->setRouter($this->router);
        $this->assertSame($this->router, $obj->getRouter());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestRouterTrait();

        $this->assertNull($obj->getRouter());
    }
}
