<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Model\FosUserInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * User interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class FosUserInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("ROLE_USER", FosUserInterface::ROLE_DEFAULT);
        $this->assertEquals("ROLE_SUPER_ADMIN", FosUserInterface::ROLE_SUPER_ADMIN);
    }
}
