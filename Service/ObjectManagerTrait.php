<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Object manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait ObjectManagerTrait {

    /**
     * Object manager.
     *
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * Get the object manager.
     *
     * @return ObjectManager Returns the object manager.
     */
    public function getObjectManager() {
        return $this->objectManager;
    }

    /**
     * Set the object manager.
     *
     * @param ObjectManager $objectManager The object manager.
     */
    protected function setObjectManager(ObjectManager $objectManager) {
        $this->objectManager = $objectManager;
        return $this;
    }

}
