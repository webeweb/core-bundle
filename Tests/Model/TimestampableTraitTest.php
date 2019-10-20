<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestTimestampableTrait;

/**
 * Timestampable trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class TimestampableTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestTimestampableTrait();

        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getUpdatedAt());
    }
}
