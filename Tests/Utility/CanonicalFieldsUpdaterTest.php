<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Utility;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Utility\Canonicalizer;
use WBW\Bundle\CoreBundle\Utility\CanonicalizerInterface;

/**
 * Canonical fields updater test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class CanonicalFieldsUpdaterTest extends AbstractTestCase {

    /**
     * Canonicalizer.
     *
     * @var CanonicalizerInterface
     */
    private $canonicalizer;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Canonicalizer mock.
        $this->canonicalizer = new Canonicalizer();
    }

    /**
     * Tests canonicalizeEmail()
     *
     * @return void
     */
    public function testCanonicalizeEmail(): void {

        $obj = new CanonicalFieldsUpdater($this->canonicalizer, $this->canonicalizer);

        $this->assertEquals("john.doe@github.com", $obj->canonicalizeEmail("JOHN.doe@GitHub.com"));
    }

    /**
     * Tests canonicalizeUsername()
     *
     * @return void
     */
    public function testCanonicalizeUsername(): void {

        $obj = new CanonicalFieldsUpdater($this->canonicalizer, $this->canonicalizer);

        $this->assertEquals("john.doe", $obj->canonicalizeUsername("JOHN.doe"));
    }

    /**
     * Tests updateCanonicalFields()
     *
     * @return void
     */
    public function testUpdateCanonicalFields(): void {

        // Set an User mock.
        $user = new TestUser();
        $user->setEmail("JOHN.doe@GitHub.com");
        $user->setUsername("JOHN.doe");

        $obj = new CanonicalFieldsUpdater($this->canonicalizer, $this->canonicalizer);

        $obj->updateCanonicalFields($user);
        $this->assertEquals("john.doe@github.com", $user->getEmailCanonical());
        $this->assertEquals("john.doe", $user->getUsernameCanonical());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set the Canonicalizer mocks.
        $emailCanonicalizer    = new Canonicalizer();
        $usernameCanonicalizer = new Canonicalizer();

        $this->assertEquals("wbw.core.utility.canonical_fields_updater.default", CanonicalFieldsUpdater::SERVICE_NAME);

        $obj = new CanonicalFieldsUpdater($usernameCanonicalizer, $emailCanonicalizer);

        $this->assertSame($emailCanonicalizer, $obj->getEmailCanonicalizer());
        $this->assertSame($usernameCanonicalizer, $obj->getUsernameCanonicalizer());
    }
}
