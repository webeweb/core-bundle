<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Groupable interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
interface GroupableInterface {

    /**
     * Add a group.
     *
     * @param GroupInterface $group The group.
     * @return GroupableInterface Returns this groupable.
     */
    public function addGroup(GroupInterface $group);

    /**
     * Get the group names.
     *
     * @return string[]
     */
    public function getGroupNames(): array;

    /**
     * Gets the groups.
     *
     * @return Collection Returns the groups.
     */
    public function getGroups(): Collection;

    /**
     * Determines if a user has group.
     *
     * @param string $name The group.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasGroup(string $name);

    /**
     * Remove a group.
     *
     * @param GroupInterface $group The group.
     * @return GroupableInterface Returns this groupable.
     */
    public function removeGroup(GroupInterface $group);
}
