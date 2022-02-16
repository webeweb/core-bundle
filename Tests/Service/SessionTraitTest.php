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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestSessionTrait;

/**
 * Session trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class SessionTraitTest extends AbstractTestCase {

    /**
     * Tests setSession()
     *
     * @return void
     */
    public function testSetSession(): void {

        $obj = new TestSessionTrait();

        $obj->setSession($this->session);
        $this->assertSame($this->session, $obj->getSession());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestSessionTrait();

        $this->assertNull($obj->getSession());
    }
}
