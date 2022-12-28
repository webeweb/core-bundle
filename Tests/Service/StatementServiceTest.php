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
use InvalidArgumentException;
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
     * Tests executeQueries()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteQueries(): void {

        $values  = array_pad([], 2, [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ]);
        $queries = $this->service->readStatementFile(__DIR__ . "/StatementServiceTest.testExecuteQueriesFile.sql");

        $obj = $this->service;

        $res = $obj->executeQueries($queries, $values);
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Result::class, $res[0]);
        $this->assertInstanceOf(Result::class, $res[1]);
    }

    /**
     * Tests executeQueriesFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteQueriesFile(): void {

        $values = array_pad([], 2, [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ]);

        $obj = $this->service;

        $res = $obj->executeQueriesFile(__DIR__ . "/StatementServiceTest.testExecuteQueriesFile.sql", $values);
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Result::class, $res[0]);
        $this->assertInstanceOf(Result::class, $res[1]);
    }

    /**
     * Tests executeQuery()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteQuery(): void {

        $values = [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ];
        $query  = $this->service->readStatementFile(__DIR__ . "/StatementServiceTest.testExecuteQueryFile.sql");

        $obj = $this->service;

        $res = $obj->executeQuery($query, $values);
        $this->assertInstanceOf(Result::class, $res);
    }

    /**
     * Tests executeQueryFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteQueryFile(): void {

        $values = [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ];

        $obj = $this->service;

        $res = $obj->executeQueryFile(__DIR__ . "/StatementServiceTest.testExecuteQueryFile.sql", $values);
        $this->assertInstanceOf(Result::class, $res);
    }

    /**
     * Tests executeStatement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteStatement(): void {

        $values = [
            ":id" => [1, PDO::PARAM_INT],
        ];
        $query  = $this->service->readStatementFile(__DIR__ . "/StatementServiceTest.testExecuteStatementFile.sql");

        $obj = $this->service;

        $res = $obj->executeStatement($query, $values);
        $this->assertEquals(0, $res);
    }

    /**
     * Tests executeStatementFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteStatementFile(): void {

        $values = [
            ":id" => [1, PDO::PARAM_INT],
        ];

        $obj = $this->service;

        $res = $obj->executeStatementFile(__DIR__ . "/StatementServiceTest.testExecuteStatementFile.sql", $values);
        $this->assertEquals(0, $res);
    }

    /**
     * Tests executeStatements()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteStatements(): void {

        $values  = array_pad([], 2, [
            ":id" => [1, PDO::PARAM_INT],
        ]);
        $queries = $this->service->readStatementFile(__DIR__ . "/StatementServiceTest.testExecuteStatementsFile.sql");

        $obj = $this->service;

        $res = $obj->executeStatements($queries, $values);
        $this->assertCount(2, $res);

        $this->assertEquals(0, $res[0]);
        $this->assertEquals(0, $res[1]);
    }

    /**
     * Tests executeStatementsFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testExecuteStatementsFile(): void {

        $values = array_pad([], 2, [
            ":id" => [1, PDO::PARAM_INT],
        ]);

        $obj = $this->service;

        $res = $obj->executeStatementsFile(__DIR__ . "/StatementServiceTest.testExecuteStatementsFile.sql", $values);
        $this->assertCount(2, $res);

        $this->assertEquals(0, $res[0]);
        $this->assertEquals(0, $res[1]);
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
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ]);
        $this->assertInstanceOf(Statement::class, $res);
    }

    /**
     * Tests readStatementFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReadStatementFile(): void {

        $obj = $this->service;

        $res = $obj->readStatementFile(__FILE__);
        $this->assertNotNull($res);
    }

    /**
     * Tests readStatementFile()
     *
     * @return void
     */
    public function testReadStatementFileWithInvalidArgumentException(): void {

        // Set a filename mock.
        $filename = __FILE__ . "~";

        $obj = $this->service;

        try {

            $obj->readStatementFile($filename);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The file "' . $filename . '" was not found', $ex->getMessage());
        }
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
