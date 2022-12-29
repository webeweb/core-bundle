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

use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\MappingException;
use PDO;
use WBW\Library\Symfony\Model\RepositoryReport;
use WBW\Library\Symfony\Model\RepositoryReportInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Repository service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
class RepositoryService implements RepositoryServiceInterface {

    use StatementServiceTrait {
        setStatementService as public;
    }

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.repository";

    /**
     * Executes a statement.
     *
     * @param Statement $statement The statement.
     * @return RepositoryReportInterface|null Returns the repository report.
     * @throws \Doctrine\DBAL\Driver\Exception Throws a driver exception if an error occurs.
     */
    protected function executeQuery(Statement $statement): ?RepositoryReportInterface {

        $result = $statement->executeQuery();

        $row = $result->fetchAllAssociative()[0];
        if (false === $row) {
            return null;
        }

        $model = new RepositoryReport();
        $model->setAvailable(intval($row["available"]));
        $model->setAverage(floatval($row["average"]));
        $model->setColumn($row["column"]);
        $model->setCount(intval($row["count"]));
        $model->setEntity($row["entity"]);
        $model->setField($row["field"]);
        $model->setMaximum(intval($row["maximum"]));
        $model->setMinimum(intval($row["minimum"]));
        $model->setTable($row["table"]);

        return $model;
    }

    /**
     * {@inheritdoc}
     */
    public function findRepositoriesReports(): array {

        /** @var RepositoryReportInterface[] $reports */
        $reports = [];

        /** @var ClassMetadata[] $allMetadata */
        $allMetadata = $this->getStatementService()->getEntityManager()->getMetadataFactory()->getAllMetadata();
        foreach ($allMetadata as $current) {

            if (true === $current->isMappedSuperclass) {
                continue;
            }

            $reports = array_merge($reports, $this->findRepositoryReports($current));
        }

        usort($reports, static::getRepositoryReportSortCallback());

        return $reports;
    }

    /**
     * Find repository reports.
     *
     * @param ClassMetadata $classMetadata The class metadata.
     * @return RepositoryReportInterface[] Returns the repository reports.
     * @throws MappingException Throws a mapping exception if an error occurs.
     * @throws DBALException Throws a DBAL exception if an error occurs.
     * @throws \Doctrine\DBAL\Driver\Exception Throws a driver exception if an error occurs.
     */
    protected function findRepositoryReports(ClassMetadata $classMetadata): array {

        /** @var RepositoryReportInterface[] $models */
        $models = [];

        foreach ($classMetadata->getFieldNames() as $current) {

            $fieldMapping = $classMetadata->getFieldMapping($current);
            if (false === in_array($fieldMapping["type"], ["string", "text"])) {
                continue;
            }

            $args = [
                $classMetadata->getTableName(),
                $classMetadata->getName(),
                $fieldMapping["columnName"],
                $fieldMapping["fieldName"],
                ArrayHelper::get($fieldMapping, "length", -1),
            ];

            $stmt = $this->prepareStatement($args[0], $args[1], $args[2], $args[3], $args[4]);

            $models[] = $this->executeQuery($stmt);
        }

        return $models;
    }

    /**
     * Get a repository report sort callback.
     *
     * @return callable Returns the repository report sort callback.
     */
    public static function getRepositoryReportSortCallback(): callable {

        return function(RepositoryReport $a, RepositoryReport $b): int {

            if ($a->getEntity() === $b->getEntity()) {
                return strcmp($a->getField(), $b->getField());
            }

            return strcmp($a->getEntity(), $b->getEntity());
        };
    }

    /**
     * Prepare a statement.
     *
     * @param string $table The table.
     * @param string $entity The entity.
     * @param string $column The column.
     * @param string $field The field.
     * @param int $available The available.
     * @return Statement Returns the statement.
     * @throws Exception Throws a DBAL exception if an error occurs.
     */
    protected function prepareStatement(string $table, string $entity, string $column, string $field, int $available): Statement {

        $template = $this->getStatementService()->readStatementFile(__DIR__ . "/RepositoryService.sql");

        $searches = ["{{ column }}", "{{ table }}"];
        $replaces = [$column, $table];

        $sql = str_replace($searches, $replaces, $template);

        return $this->getStatementService()->prepareStatement($sql, [
            ":available" => [$available, PDO::PARAM_INT],
            ":column"    => [$column, PDO::PARAM_STR],
            ":entity"    => [$entity, PDO::PARAM_STR],
            ":field"     => [$field, PDO::PARAM_STR],
            ":table"     => [$table, PDO::PARAM_STR],
        ]);
    }
}
