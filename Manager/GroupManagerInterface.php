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
 * Group manager interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
interface GroupManagerInterface {

    /**
     * Create a group.
     *
     * @param string $name The name.
     * @return GroupInterface Returns a group.
     */
    public function createGroup(string $name): GroupInterface;

    /**
     * Delete a group.
     *
     * @param GroupInterface $group The group.
     * @return void
     */
    public function deleteGroup(GroupInterface $group): void;

    /**
     * Find a group.
     *
     * @param array $criteria The criteria.
     * @return GroupInterface|null Returns the group.
     */
    public function findGroupBy(array $criteria): ?GroupInterface;

    /**
     * Find a group.
     *
     * @param string $name The name.
     * @return GroupInterface|null Returns the group.
     */
    public function findGroupByName(string $name): ?GroupInterface;

    /**
     * Find all groups.
     *
     * @return GroupInterface[] Returns the groups.
     */
    public function findGroups(): array;

    /**
     * Get the class.
     *
     * @return string|null Returns the class.
     */
    public function getClass(): ?string;

    /**
     * Update a group.
     *
     * @param GroupInterface $group The group.
     * @return void
     */
    public function updateGroup(GroupInterface $group): void;
}