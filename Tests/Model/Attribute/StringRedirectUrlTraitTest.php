<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringRedirectUrlTrait;

/**
 * String redirect URL trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringRedirectUrlTraitTest extends AbstractTestCase {

    /**
     * Tests the setRedirectUrl() method.
     *
     * @return void
     */
    public function testSetRedirectUrl(): void {

        $obj = new TestStringRedirectUrlTrait();

        $obj->setRedirectUrl("redirectUrl");
        $this->assertEquals("redirectUrl", $obj->getRedirectUrl());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringRedirectUrlTrait();

        $this->assertNull($obj->getRedirectUrl());
    }
}
