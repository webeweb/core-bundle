<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestFloatAverageTrait;

/**
 * Float average trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class FloatAverageTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatAverageTrait();

        $this->assertNull($obj->getAverage());
    }

    /**
     * Tests the setAverage() method.
     *
     * @return void
     */
    public function testSetAverage() {

        $obj = new TestFloatAverageTrait();

        $obj->setAverage(1.01);
        $this->assertEquals(1.01, $obj->getAverage());
    }
}
