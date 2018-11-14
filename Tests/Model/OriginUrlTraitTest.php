<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestOriginUrlTrait;

/**
 * Origin URL trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class OriginUrlTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestOriginUrlTrait();

        $this->assertNull($obj->getOriginUrl());
    }

    /**
     * Tests the setOriginUrl() method.
     *
     * @return void
     */
    public function testSetOriginUrl() {

        $obj = new TestOriginUrlTrait();

        $obj->setOriginUrl("originUrl");
        $this->assertEquals("originUrl", $obj->getOriginUrl());
    }

}