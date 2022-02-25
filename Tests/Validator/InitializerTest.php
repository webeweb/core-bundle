<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Validator;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Utility\Canonicalizer;
use WBW\Bundle\CoreBundle\Validator\Initializer;

/**
 * Initializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Validator
 */
class InitializerTest extends AbstractTestCase {

    /**
     * Canonical fields updater.
     *
     * @var CanonicalFieldsUpdater
     */
    private $canonicalFieldsUpdater;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Canonicalizer mock.
        $canonicalizer = new Canonicalizer();

        // Set a Canonical fields updater mock.
        $this->canonicalFieldsUpdater = new CanonicalFieldsUpdater($canonicalizer, $canonicalizer);
    }

    /**
     * Tests initialize()
     *
     * @return void
     */
    public function testInitialize(): void {

        $obj = new Initializer($this->canonicalFieldsUpdater);

        $this->assertNull($obj->initialize(null));
        $this->assertNull($obj->initialize(new TestUser()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.validator.initializer", Initializer::SERVICE_NAME);

        $obj = new Initializer($this->canonicalFieldsUpdater);

        $this->assertSame($this->canonicalFieldsUpdater, $obj->getCanonicalFieldsUpdater());
    }
}
