<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

use WBW\Bundle\CoreBundle\Model\GroupInterface;

/**
 * Group manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class GroupManager implements GroupManagerInterface {

    /**
     * {@inheritDoc}
     */
    public function createGroup(string $name): GroupInterface {

        $class = $this->getClass();

        return new $class($name);
    }

    /**
     * {@inheritDoc}
     */
    public function findGroupByName(string $name): ?GroupInterface {
        return $this->findGroupBy([
            "name" => $name,
        ]);
    }
}
