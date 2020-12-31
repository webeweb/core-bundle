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

use WBW\Bundle\CoreBundle\Model\RepositoryReport;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Repository report test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class RepositoryReportTest extends AbstractTestCase {

    /**
     * Tests the setAvailable() method.
     *
     * @return void
     */
    public function testSetAvailable(): void {

        $obj = new RepositoryReport();

        $obj->setAvailable(255);
        $this->assertEquals(255, $obj->getAvailable());
    }

    /**
     * Tests the setAverage() method.
     *
     * @return void
     */
    public function testSetAverage(): void {

        $obj = new RepositoryReport();

        $obj->setAverage(0.1);
        $this->assertEquals(0.1, $obj->getAverage());
    }

    /**
     * Tests the setColumn() method.
     *
     * @return void
     */
    public function testSetColumn(): void {

        $obj = new RepositoryReport();

        $obj->setColumn("column");
        $this->assertEquals("column", $obj->getColumn());
    }

    /**
     * Tests the setCount() method.
     *
     * @return void
     */
    public function testSetCount(): void {

        $obj = new RepositoryReport();

        $obj->setCount(1);
        $this->assertEquals(1, $obj->getCount());
    }

    /**
     * Tests the setEntity() method.
     *
     * @return void
     */
    public function testSetEntity(): void {

        $obj = new RepositoryReport();

        $obj->setEntity("entity");
        $this->assertEquals("entity", $obj->getEntity());
    }

    /**
     * Tests the setField() method.
     *
     * @return void
     */
    public function testSetField(): void {

        $obj = new RepositoryReport();

        $obj->setField("field");
        $this->assertEquals("field", $obj->getField());
    }

    /**
     * Tests the setMaximum() method.
     *
     * @return void
     */
    public function testSetMaximum(): void {

        $obj = new RepositoryReport();

        $obj->setMaximum(180);
        $this->assertEquals(180, $obj->getMaximum());
    }

    /**
     * Tests the setMinimum() method.
     *
     * @return void
     */
    public function testSetMinimum(): void {

        $obj = new RepositoryReport();

        $obj->setMinimum(90);
        $this->assertEquals(90, $obj->getMinimum());
    }

    /**
     * Tests the setTable() method.
     *
     * @return void
     */
    public function testSetTable(): void {

        $obj = new RepositoryReport();

        $obj->setTable("table");
        $this->assertEquals("table", $obj->getTable());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryReport();

        $this->assertNull($obj->getAvailable());
        $this->assertNull($obj->getAverage());
        $this->assertNull($obj->getColumn());
        $this->assertNull($obj->getCount());
        $this->assertNull($obj->getEntity());
        $this->assertNull($obj->getField());
        $this->assertNull($obj->getMaximum());
        $this->assertNull($obj->getMinimum());
        $this->assertNull($obj->getTable());
    }
}
