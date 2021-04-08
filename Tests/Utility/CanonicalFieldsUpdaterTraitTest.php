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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Utility\TestCanonicalFieldsUpdaterTrait;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;

/**
 * Canonical fields updater trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class CanonicalFieldsUpdaterTraitTest extends AbstractTestCase {

    /**
     * Tests the setCanonicalFieldsUpdater() method.
     *
     * @return void
     */
    public function testSetCanonicalFieldsUpdater(): void {

        // Set a CanonicalFields updater mock.
        $canonicalFieldsUpdater = new CanonicalFieldsUpdater($this->canonicalizer, $this->canonicalizer);

        $obj = new TestCanonicalFieldsUpdaterTrait();

        $obj->setCanonicalFieldsUpdater($canonicalFieldsUpdater);
        $this->assertSame($canonicalFieldsUpdater, $obj->getCanonicalFieldsUpdater());
    }
}