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
use InvalidArgumentException;
use PDO;
use Throwable;
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
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Statement service.
        $this->service = static::$kernel->getContainer()->get(StatementService::SERVICE_NAME . ".alias");
    }

    /**
     * {@inheritDoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        parent::setUpSchemaTool();
    }

    /**
     * Test executeQueries()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteQueries(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteQueriesFile.sql";

        $values  = array_pad([], 2, [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ]);
        $queries = $this->service->readStatementFile($filename);

        $obj = $this->service;

        $res = $obj->executeQueries($queries, $values);
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Result::class, $res[0]);
        $this->assertInstanceOf(Result::class, $res[1]);
    }

    /**
     * Test executeQueriesFile()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteQueriesFile(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteQueriesFile.sql";

        $values = array_pad([], 2, [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ]);

        $obj = $this->service;

        $res = $obj->executeQueriesFile($filename, $values);
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Result::class, $res[0]);
        $this->assertInstanceOf(Result::class, $res[1]);
    }

    /**
     * Test executeQuery()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteQuery(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteQueryFile.sql";

        $values = [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ];
        $query  = $this->service->readStatementFile($filename);

        $obj = $this->service;

        $res = $obj->executeQuery($query, $values);
        $this->assertInstanceOf(Result::class, $res);
    }

    /**
     * Test executeQueryFile()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteQueryFile(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteQueryFile.sql";

        $values = [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ];

        $obj = $this->service;

        $res = $obj->executeQueryFile($filename, $values);
        $this->assertInstanceOf(Result::class, $res);
    }

    /**
     * Test executeStatement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteStatement(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteStatementFile.sql";

        $values = [
            ":id" => [1, PDO::PARAM_INT],
        ];
        $query  = $this->service->readStatementFile($filename);

        $obj = $this->service;

        $res = $obj->executeStatement($query, $values);
        $this->assertEquals(0, $res);
    }

    /**
     * Test executeStatementFile()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteStatementFile(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteStatementFile.sql";

        $values = [
            ":id" => [1, PDO::PARAM_INT],
        ];

        $obj = $this->service;

        $res = $obj->executeStatementFile($filename, $values);
        $this->assertEquals(0, $res);
    }

    /**
     * Test executeStatements()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteStatements(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteStatementsFile.sql";

        $values  = array_pad([], 2, [
            ":id" => [1, PDO::PARAM_INT],
        ]);
        $queries = $this->service->readStatementFile($filename);

        $obj = $this->service;

        $res = $obj->executeStatements($queries, $values);
        $this->assertCount(2, $res);

        $this->assertEquals(0, $res[0]);
        $this->assertEquals(0, $res[1]);
    }

    /**
     * Test executeStatementsFile()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testExecuteStatementsFile(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteStatementsFile.sql";

        $values = array_pad([], 2, [
            ":id" => [1, PDO::PARAM_INT],
        ]);

        $obj = $this->service;

        $res = $obj->executeStatementsFile($filename, $values);
        $this->assertCount(2, $res);

        $this->assertEquals(0, $res[0]);
        $this->assertEquals(0, $res[1]);
    }

    /**
     * Test prepareStatement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testPrepareStatement(): void {

        $values = [
            ":date" => [(new DateTime())->format("Y-m-d"), PDO::PARAM_STR],
        ];
        $query  = "SELECT :date";

        $obj = $this->service;

        $res = $obj->prepareStatement($query, $values);
        $this->assertInstanceOf(Statement::class, $res);
    }

    /**
     * Test readStatementFile()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testReadStatementFile(): void {

        $obj = $this->service;

        $res = $obj->readStatementFile(__FILE__);
        $this->assertNotNull($res);
    }

    /**
     * Test readStatementFile()
     *
     * @return void
     */
    public function testReadStatementFileWithInvalidArgumentException(): void {

        // Set a filename mock.
        $filename = __FILE__ . "~";

        $obj = $this->service;

        try {

            $obj->readStatementFile($filename);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The file "' . $filename . '" was not found', $ex->getMessage());
        }
    }

    /**
     * Test splitStatements()
     *
     * @return void
     */
    public function testSplitStatements(): void {

        $filename = __DIR__ . "/StatementServiceTest.testExecuteQueriesFile.sql";

        $queries = $this->service->readStatementFile($filename);

        $obj = $this->service;

        $res = $obj->splitStatements($queries);
        $this->assertCount(2, $res);

        $this->assertEquals("SELECT :date;", $res[0]);
        $this->assertEquals("SELECT :date;", $res[1]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set an Entity manager mock.
        $entityManager = $this->getMockBuilder(EntityManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.service.statement", StatementService::SERVICE_NAME);

        $obj = new StatementService($entityManager);

        $this->assertInstanceOf(StatementServiceInterface::class, $obj);

        $this->assertSame($entityManager, $obj->getEntityManager());
    }
}
