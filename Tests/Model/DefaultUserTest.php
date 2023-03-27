<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Model\DefaultUser;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default user test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class DefaultUserTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultUser();

        $this->assertNull($obj->getPassword());
        $this->assertEquals([], $obj->getRoles());
        $this->assertNull($obj->getSalt());
        $this->assertNull($obj->getUsername());
    }
}
