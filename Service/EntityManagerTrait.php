<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Entity manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait EntityManagerTrait {

    /**
     * Entity manager.
     *
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * Get the entity manager.
     *
     * @return EntityManagerInterface Returns the entity manager.
     */
    public function getEntityManager() {
        return $this->entityManager;
    }

    /**
     * Set the entity manager.
     *
     * @param EntityManagerInterface|null $entityManager The entity manager.
     */
    protected function setEntityManager(EntityManagerInterface $entityManager = null) {
        $this->entityManager = $entityManager;
        return $this;
    }
}
