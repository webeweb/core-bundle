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

use Doctrine\DBAL\Result;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use WBW\Bundle\CoreBundle\Doctrine\ORM\EntityManagerTrait;

/**
 * Statement service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
class StatementService implements StatementServiceInterface {

    use EntityManagerTrait;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface $em The entity manager.
     */
    public function __construct(EntityManagerInterface $em) {
        $this->setEntityManager($em);
    }

    /**
     * {@inheritdoc}
     */
    public function executeQuery(string $sql, array $values): Result {
        return $this->prepareStatement($sql, $values)->executeQuery();
    }

    /**
     * {@inheritdoc}
     */
    public function executeStatement(string $sql, array $values): int {
        return $this->prepareStatement($sql, $values)->executeStatement();
    }

    /**
     * {@inheritdoc}
     */
    public function prepareStatement(string $sql, array $values): Statement {

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);

        foreach ($values as $k => $v) {
            $stmt->bindValue($k, $v[0], $v[1]);
        }

        return $stmt;
    }
}
