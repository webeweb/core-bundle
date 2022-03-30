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

/**
 * Repository service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait RepositoryServiceTrait {

    /**
     * Repository service.
     *
     * @var RepositoryServiceInterface|null
     */
    protected $repositoryService;

    /**
     * Get the repository service.
     *
     * @return RepositoryServiceInterface|null Returns the repository service.
     */
    public function getRepositoryService(): ?RepositoryServiceInterface {
        return $this->repositoryService;
    }

    /**
     * Set the repository service.
     *
     * @param RepositoryServiceInterface|null $repositoryService The repository service.
     * @return self Returns this instance.
     */
    protected function setRepositoryService(?RepositoryServiceInterface $repositoryService): self {
        $this->repositoryService = $repositoryService;
        return $this;
    }
}
