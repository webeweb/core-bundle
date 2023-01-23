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

use Throwable;
use WBW\Library\Symfony\Model\RepositoryReportInterface;

/**
 * Repository service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
interface RepositoryServiceInterface {

    /**
     * Find all repositories reports.
     *
     * @return RepositoryReportInterface[] Returns the repositories reports.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function findAll(): array;
}
