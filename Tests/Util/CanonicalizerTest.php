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
use WBW\Bundle\CoreBundle\Util\Canonicalizer;

/**
 * Canonicalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Util
 */
class CanonicalizerTest extends AbstractTestCase {

    /**
     * Tests the canonicalize() method.
     *
     * @return void
     */
    public function testCanonicalize(): void {

        $obj = new Canonicalizer();

        $this->assertNull($obj->canonicalize(null));
        $this->assertEquals("john.doe@github.com", $obj->canonicalize("JOHN.doe@GitHub.com"));
    }
}