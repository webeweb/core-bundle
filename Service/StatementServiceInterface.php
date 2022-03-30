<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Result;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Statement service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
interface StatementServiceInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.statement";

    /**
     * Get the entity manager.
     *
     * @return EntityManagerInterface|null Returns the entity manager.
     */
    public function getEntityManager(): ?EntityManagerInterface;

    /**
     * Executes a query.
     *
     * @param string $sql The SQL.
     * @param array $values The values.
     * @return Result Returns the result.
     * @throws Exception Throws a DBAL exception if an error occurs.
     * @throws \Doctrine\DBAL\Driver\Exception Throws a driver exception if an error occurs.
     */
    public function executeQuery(string $sql, array $values): Result;

    /**
     * Executes a statement.
     *
     * @param string $sql The SQL.
     * @param array $values The values.
     * @return int Returns the affected rows.
     * @throws Exception Throws a DBAL exception if an error occurs.
     * @throws \Doctrine\DBAL\Driver\Exception Throws a driver exception if an error occurs.
     */
    public function executeStatement(string $sql, array $values): int;

    /**
     * Prepares a statement.
     *
     * @param string $sql The SQL.
     * @param array $values The values.
     * @return Statement Returns the statement.
     * @throws Exception Throws a DBAL exception if an error occurs.
     */
    public function prepareStatement(string $sql, array $values): Statement;
}
