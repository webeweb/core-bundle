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

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestRedirectUrlTrait;

/**
 * Redirect URL trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class RedirectUrlTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestRedirectUrlTrait();

        $this->assertNull($obj->getRedirectUrl());
    }

    /**
     * Tests the setRedirectUrl() method.
     *
     * @return void
     */
    public function testSetRedirectUrl() {

        $obj = new TestRedirectUrlTrait();

        $obj->setRedirectUrl("redirectUrl");
        $this->assertEquals("redirectUrl", $obj->getRedirectUrl());
    }

}
