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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestTokenStorageTrait;

/**
 * Token storage trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class TokenStorageTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestTokenStorageTrait();

        $this->assertNull($obj->getTokenStorage());
    }

    /**
     * Tests the setTokenStorage() method.
     *
     * @return void
     */
    public function testSetTokenStorage() {

        $obj = new TestTokenStorageTrait();

        $obj->setTokenStorage($this->tokenStorage);
        $this->assertSame($this->tokenStorage, $obj->getTokenStorage());
    }
}
