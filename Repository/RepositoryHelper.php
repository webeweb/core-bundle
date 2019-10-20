<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Repository;

use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\MappingException;
use WBW\Bundle\CoreBundle\Model\RepositoryReport;
use WBW\Bundle\CoreBundle\Service\EntityManagerTrait;

/**
 * Repository helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Repository
 */
class RepositoryHelper {

    use EntityManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.repository.repository_helper";

    /**
     * SQL query.
     *
     * @var string
     */
    const SQL_QUERY = <<< EOT
SELECT
    '%table%' AS 'table',
    '%entity%' AS 'entity',
    '%column%' AS 'column',
    '%field%' AS 'field',
    %available% AS 'available',
    MIN(LENGTH(`%column%`)) AS 'minimum',
    MAX(LENGTH(`%column%`)) AS 'maximum',
    AVG(LENGTH(`%column%`)) AS 'average',
    COUNT(`%column%`) AS 'count'
FROM `%table%`
EOT;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface $entityManager The entity manager.
     */
    public function __construct(EntityManagerInterface $entityManager) {
        $this->setEntityManager($entityManager);
    }

    /**
     * Execute a statement.
     *
     * @param Statement $statement The statement.
     * @return RepositoryReport|null Returns the repository report in case of success, null otherwise.
     */
    protected function executeStatement(Statement $statement) {

        $result = $statement->execute();
        if (false === $result) {
            return null;
        }

        $row = $statement->fetchAll()[0];

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
     * Get a repository report sort closure.
     *
     * @return Closure Returns the repository report sort closure.
     */
    public static function getRepositoryReportSortClosure() {

        return function(RepositoryReport $a, RepositoryReport $b) {

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
     * @param string $field The field.
     * @param int $available The available.
     * @param string $column The column.
     * @return Statement Returns the statement.
     * @throws DBALException Throws a DBAL exception.
     */
    protected function prepareStatement($table, $entity, $field, $available, $column) {

        $searches = ["%table%", "%entity%", "%field%", "%available%", "%column%"];
        $replaces = [$table, $entity, $field, $available, $column];

        $query = str_replace($searches, $replaces, self::SQL_QUERY);

        return $this->getEntityManager()->getConnection()->prepare($query);
    }

    /**
     * Read the repositories.
     *
     * @return RepositoryReport[] Returns the repository reports.
     * @throws DBALException Throws a DBAL exception.
     * @throws MappingException Throws a mapping exception.
     */
    public function readRepositories() {

        /** @var RepositoryReport[] $reports */
        $reports = [];

        /** @var ClassMetadata[] $allMetadata */
        $allMetadata = $this->getEntityManager()->getMetadataFactory()->getAllMetadata();

        foreach ($allMetadata as $current) {
            if (true === $current->isMappedSuperclass) {
                continue;
            }
            $reports = array_merge($reports, $this->readRepository($current));
        }

        usort($reports, static::getRepositoryReportSortClosure());

        return $reports;
    }

    /**
     * Read a repository.
     *
     * @param ClassMetadata $classMetadata The class metadata.
     * @return RepositoryReport[] Returns the repository reports.
     * @throws DBALException Throws a DBAL exception.
     * @throws MappingException Throws a mapping exception.
     */
    protected function readRepository(ClassMetadata $classMetadata) {

        /** @var RepositoryReport[] $reports */
        $reports = [];

        foreach ($classMetadata->getFieldNames() as $current) {

            $fieldMapping = $classMetadata->getFieldMapping($current);
            if (false === in_array($fieldMapping["type"], ["string", "text"])) {
                continue;
            }

            $args = [
                $classMetadata->getTableName(),
                $classMetadata->getName(),
                $fieldMapping["fieldName"],
                true === array_key_exists("length", $fieldMapping) ? $fieldMapping["length"] : -1,
                $fieldMapping["columnName"],
            ];

            $stmt = $this->prepareStatement($args[0], $args[1], $args[2], $args[3], $args[4]);

            $reports[] = $this->executeStatement($stmt);
        }

        return $reports;
    }
}
