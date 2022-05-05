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

use Exception;
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
        $this->service = static::$kernel->getContainer()->get(RepositoryServiceInterface::SERVICE_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        parent::setUpSchemaTool();
    }

    /**
     * Tests findRepositoriesReports()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFindRepositoriesReports(): void {

        $obj = $this->service;

        $res = $obj->findRepositoriesReports();
        $this->assertCount(4, $res);

        $this->assertEquals("wbw_core_group", $res[0]->getTable());
        $this->assertEquals(TestGroup::class, $res[0]->getEntity());
        $this->assertEquals("name", $res[0]->getColumn());
        $this->assertEquals("name", $res[0]->getField());
        $this->assertEquals(0, $res[0]->getCount());
        $this->assertEquals(-1, $res[0]->getAvailable());
        $this->assertEquals(0, $res[0]->getAverage());
        $this->assertEquals(0, $res[0]->getMinimum());
        $this->assertEquals(0, $res[0]->getMaximum());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryService();

        $this->assertInstanceOf(RepositoryServiceInterface::class, $obj);

        $this->assertNull($obj->getStatementService());
    }
}
