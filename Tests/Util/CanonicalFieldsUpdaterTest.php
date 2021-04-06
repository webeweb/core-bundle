<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Util;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Bundle\CoreBundle\Util\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Util\Canonicalizer;

/**
 * Canonical fields updater test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Util
 */
class CanonicalFieldsUpdaterTest extends AbstractTestCase {

    /**
     * Tests the canonicalizeEmail() method.
     *
     * @return void
     */
    public function testCanonicalizeEmail(): void {

        $obj = new CanonicalFieldsUpdater($this->canonicalzer, $this->canonicalzer);

        $this->assertEquals("john.doe@github.com", $obj->canonicalizeEmail("JOHN.doe@GitHub.com"));
    }

    /**
     * Tests the canonicalizeUsername() method.
     *
     * @return void
     */
    public function testCanonicalizeUsername(): void {

        $obj = new CanonicalFieldsUpdater($this->canonicalzer, $this->canonicalzer);

        $this->assertEquals("john.doe", $obj->canonicalizeUsername("JOHN.doe"));
    }

    /**
     * Tests the updateCanonicalFields() method.
     *
     * @return void
     */
    public function testUpdateCanonicalFields(): void {

        // Set an User mock.
        $user = new TestUser();
        $user->setEmail("JOHN.doe@GitHub.com");
        $user->setUsername("JOHN.doe");

        $obj = new CanonicalFieldsUpdater($this->canonicalzer, $this->canonicalzer);

        $obj->updateCanonicalFields($user);
        $this->assertEquals("john.doe@github.com", $user->getEmailCanonical());
        $this->assertEquals("john.doe", $user->getUsernameCanonical());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set the Canonicalizer mocks.
        $emailCanonicalizer    = new Canonicalizer();
        $usernameCanonicalizer = new Canonicalizer();

        $obj = new CanonicalFieldsUpdater($usernameCanonicalizer, $emailCanonicalizer);

        $this->assertSame($emailCanonicalizer, $obj->getEmailCanonicalizer());
        $this->assertSame($usernameCanonicalizer, $obj->getUsernameCanonicalizer());
    }

}