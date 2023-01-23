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
        $this->service = static::$kernel->getContainer()->get(RepositoryService::SERVICE_NAME);
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

        $this->assertEquals("wbw_core_group", $res[0]->getTable());
        $this->assertEquals(TestGroup::class, $res[0]->getEntity());
        $this->assertEquals(0, $res[0]->getCount());

        $this->assertCount(1, $res[0]->getDetails());

        $this->assertEquals("name", $res[0]->getDetails()[0]->getColumn());
        $this->assertEquals("name", $res[0]->getDetails()[0]->getField());
        $this->assertEquals(-1, $res[0]->getDetails()[0]->getAvailable());
        $this->assertEquals(0, $res[0]->getDetails()[0]->getAverage());
        $this->assertEquals(0, $res[0]->getDetails()[0]->getMinimum());
        $this->assertEquals(0, $res[0]->getDetails()[0]->getMaximum());

        $this->assertEquals("wbw_core_user", $res[1]->getTable());
        $this->assertEquals(TestUser::class, $res[1]->getEntity());
        $this->assertEquals(0, $res[1]->getCount());

        $this->assertCount(3, $res[1]->getDetails());
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
