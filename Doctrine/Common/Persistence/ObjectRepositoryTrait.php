<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Doctrine\Common\Persistence;

use Doctrine\Common\Persistence\ObjectRepository;

/**
 * Object repository trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Doctrine\Common\Persistence
 */
trait ObjectRepositoryTrait {

    /**
     * Object repository.
     *
     * @var ObjectRepository|null
     */
    private $objectRepository;

    /**
     * Get the object repository.
     *
     * @return ObjectRepository|null Returns the object repository.
     */
    public function getObjectRepository(): ?ObjectRepository {
        return $this->objectRepository;
    }

    /**
     * Set the object repository.
     *
     * @param ObjectRepository|null $objectRepository The object repository.
     * @return self Returns this instance.
     */
    protected function setObjectRepository(?ObjectRepository $objectRepository): self {
        $this->objectRepository = $objectRepository;
        return $this;
    }
}
