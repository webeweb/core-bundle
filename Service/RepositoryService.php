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

use Doctrine\ORM\Mapping\ClassMetadata;
use PDO;
use Throwable;
use WBW\Library\Symfony\Model\RepositoryDetail;
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
     * {@inheritdoc}
     */
    public function findAll(): array {

        /** @var RepositoryReportInterface[] $reports */
        $reports = [];

        /** @var ClassMetadata[] $allMetadata */
        $allMetadata = $this->getStatementService()->getEntityManager()->getMetadataFactory()->getAllMetadata();
        foreach ($allMetadata as $current) {

            if (true === $current->isMappedSuperclass) {
                continue;
            }

            $reports[] = $this->findReport($current);
        }

        usort($reports, static::usortRepositoryReportCallback());

        return $reports;
    }

    /**
     * Find all repository details.
     *
     * @param ClassMetadata $classMetadata The class metadata.
     * @return RepositoryDetail[] Returns the repository details.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function findDetails(ClassMetadata $classMetadata): array {

        /** @var RepositoryDetail[] $models */
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

            $model = $this->newRepositoryDetail($args[0], $args[1], $args[2], $args[3], $args[4]);
            if (null !== $model) {
                $models[] = $model;
            }
        }

        return $models;
    }

    /**
     * Find one repository report.
     *
     * @param ClassMetadata $classMetadata The class metadata.
     * @return RepositoryReportInterface Returns the repository report.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function findReport(ClassMetadata $classMetadata): RepositoryReportInterface {

        $query = "SELECT COUNT(*) FROM {$classMetadata->getTableName()}";
        $result = $this->getStatementService()->executeQuery($query, []);

        $count = intval($result->fetchOne());

        $model = new RepositoryReport();
        $model->setTable($classMetadata->getTableName());
        $model->setEntity($classMetadata->getName());
        $model->setCount($count);

        $details = $this->findDetails($classMetadata);
        foreach ($details as $current) {

            if (null !== $current) {
                $model->addDetail($current->setRepositoryReport($model));
            }
        }

        return $model;
    }

    /**
     * Creates a repository detail.
     *
     * @param string $table The table.
     * @param string $entity The entity.
     * @param string $column The column.
     * @param string $field The field.
     * @param int $available The available.
     * @return RepositoryDetail|null Returns the repository detail.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function newRepositoryDetail(string $table, string $entity, string $column, string $field, int $available): ?RepositoryDetail {

        $template = $this->getStatementService()->readStatementFile(__DIR__ . "/RepositoryService.sql");

        $searches = ["{{ table }}", "{{ column }}"];
        $replaces = [$table, $column];

        $sql = str_replace($searches, $replaces, $template);

        $stmt = $this->getStatementService()->prepareStatement($sql, [
            ":available" => [$available, PDO::PARAM_INT],
            ":column"    => [$column, PDO::PARAM_STR],
            ":entity"    => [$entity, PDO::PARAM_STR],
            ":field"     => [$field, PDO::PARAM_STR],
            ":table"     => [$table, PDO::PARAM_STR],
        ]);

        $result = $stmt->executeQuery();

        $row = $result->fetchAllAssociative()[0];

        $model = new RepositoryDetail();
        $model->setAvailable(intval($row["available"]));
        $model->setAverage(floatval($row["average"]));
        $model->setColumn($row["column"]);
        $model->setField($row["field"]);
        $model->setMaximum(intval($row["maximum"]));
        $model->setMinimum(intval($row["minimum"]));

        return $model;
    }

    /**
     * Usort repository report callback.
     *
     * @return callable Returns the usort repository report callback.
     */
    protected static function usortRepositoryReportCallback(): callable {

        return function(RepositoryReport $a, RepositoryReport $b): int {
            return strcmp($a->getEntity(), $b->getEntity());
        };
    }
}
