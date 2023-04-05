<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use Throwable;
use WBW\Bundle\CoreBundle\Service\RepositoryService;
use WBW\Bundle\CoreBundle\Service\RepositoryServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestGroup;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

/**
 * Repository service test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class RepositoryServiceTest extends AbstractWebTestCase {

    /**
     * Repository service.
     *
     * @var RepositoryServiceInterface
     */
    private $service;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Repository service.
        $this->service = static::$kernel->getContainer()->get(RepositoryService::SERVICE_NAME . ".alias");
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        parent::setUpSchemaTool();
    }

    /**
     * Tests findAll()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFindAll(): void {

        $obj = $this->service;

        $res = $obj->findAll();
        $this->assertCount(2, $res);
    }

    /**
     * Tests findOneByEntity()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFindOneByEntity(): void {

        $obj = $this->service;

        $res = $obj->findOneByEntity(TestGroup::class);

        $this->assertEquals("wbw_core_group", $res->getTable());
        $this->assertEquals(TestGroup::class, $res->getEntity());
        $this->assertEquals(0, $res->getCount());

        $this->assertCount(1, $res->getDetails());

        $this->assertEquals("name", $res->getDetails()[0]->getColumn());
        $this->assertEquals("name", $res->getDetails()[0]->getField());
        $this->assertEquals(-1, $res->getDetails()[0]->getAvailable());
        $this->assertEquals(0, $res->getDetails()[0]->getAverage());
        $this->assertEquals(0, $res->getDetails()[0]->getMinimum());
        $this->assertEquals(0, $res->getDetails()[0]->getMaximum());
        $this->assertEquals("string", $res->getDetails()[0]->getType());
    }

    /**
     * Tests findOneByTable()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFindOneByTable(): void {

        $obj = $this->service;

        $res = $obj->findOneByTable("wbw_core_user");

        $this->assertEquals("wbw_core_user", $res->getTable());
        $this->assertEquals(TestUser::class, $res->getEntity());
        $this->assertEquals(0, $res->getCount());

        $this->assertCount(3, $res->getDetails());

        $this->assertEquals("password", $res->getDetails()[0]->getColumn());
        $this->assertEquals("password", $res->getDetails()[0]->getField());
        $this->assertEquals(-1, $res->getDetails()[0]->getAvailable());
        $this->assertEquals(0, $res->getDetails()[0]->getAverage());
        $this->assertEquals(0, $res->getDetails()[0]->getMinimum());
        $this->assertEquals(0, $res->getDetails()[0]->getMaximum());
        $this->assertEquals("string", $res->getDetails()[0]->getType());

        $this->assertEquals("salt", $res->getDetails()[1]->getColumn());
        $this->assertEquals("salt", $res->getDetails()[1]->getField());
        $this->assertEquals(-1, $res->getDetails()[1]->getAvailable());
        $this->assertEquals(0, $res->getDetails()[1]->getAverage());
        $this->assertEquals(0, $res->getDetails()[1]->getMinimum());
        $this->assertEquals(0, $res->getDetails()[1]->getMaximum());
        $this->assertEquals("string", $res->getDetails()[1]->getType());

        $this->assertEquals("username", $res->getDetails()[2]->getColumn());
        $this->assertEquals("username", $res->getDetails()[2]->getField());
        $this->assertEquals(-1, $res->getDetails()[2]->getAvailable());
        $this->assertEquals(0, $res->getDetails()[2]->getAverage());
        $this->assertEquals(0, $res->getDetails()[2]->getMinimum());
        $this->assertEquals(0, $res->getDetails()[2]->getMaximum());
        $this->assertEquals("string", $res->getDetails()[2]->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.service.repository", RepositoryService::SERVICE_NAME);

        $obj = new RepositoryService();

        $this->assertInstanceOf(RepositoryServiceInterface::class, $obj);

        $this->assertNull($obj->getStatementService());
    }
}
