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

use DateTime;
use Doctrine\DBAL\Result;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use PDO;
use WBW\Bundle\CoreBundle\Service\StatementService;
use WBW\Bundle\CoreBundle\Service\StatementServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Statement service test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class StatementServiceTest extends AbstractWebTestCase {

    /**
     * Statement service.
     *
     * @var StatementServiceInterface
     */
    private $service;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Statement service.
        $this->service = static::$kernel->getContainer()->get(StatementServiceInterface::SERVICE_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        parent::setUpSchemaTool();
    }

    /**
     * Tests executeQuery()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteQuery(): void {

        $obj = $this->service;

        $res = $obj->executeQuery("SELECT :date", [
            ":date" => [
                (new DateTime())->format("Y-m-d"),
                PDO::PARAM_STR,
            ],
        ]);
        $this->assertInstanceOf(Result::class, $res);
    }

    /**
     * Tests executeStatement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteStatement(): void {

        $obj = $this->service;

        $res = $obj->executeStatement("DELETE FROM wbw_core_user WHERE id = 1", []);
        $this->assertEquals(0, $res);
    }

    /**
     * Tests prepareStatement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testPrepareStatement(): void {

        $obj = $this->service;

        $res = $obj->prepareStatement("SELECT :date", [
            ":date" => [
                (new DateTime())->format("Y-m-d"),
                PDO::PARAM_STR,
            ],
        ]);
        $this->assertInstanceOf(Statement::class, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set an Entity manager mock.
        $entityManager = $this->getMockBuilder(EntityManagerInterface::class)->getMock();

        $obj = new StatementService($entityManager);

        $this->assertInstanceOf(StatementServiceInterface::class, $obj);

        $this->assertSame($entityManager, $obj->getEntityManager());
    }
}
