<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Doctrine\Common\Persistence;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Object manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Doctrine\Common\Persistence
 */
trait ObjectManagerTrait {

    /**
     * Object manager.
     *
     * @var ObjectManager|null
     */
    private $objectManager;

    /**
     * Get the object manager.
     *
     * @return ObjectManager|null Returns the object manager.
     */
    public function getObjectManager(): ?ObjectManager {
        return $this->objectManager;
    }

    /**
     * Set the object manager.
     *
     * @param ObjectManager|null $objectManager The object manager.
     * @return self Returns this instance.
     */
    protected function setObjectManager(?ObjectManager $objectManager): self {
        $this->objectManager = $objectManager;
        return $this;
    }
}
