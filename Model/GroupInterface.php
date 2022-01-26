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

/**
 * Group interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
interface GroupInterface {

    /**
     * Add a role.
     *
     * @param string $role The role.
     * @return GroupInterface Returns this group.
     */
    public function addRole(string $role);

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int;

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string;

    /**
     * Get the roles.
     *
     * @return string[] Returns the roles.
     */
    public function getRoles(): array;

    /**
     * Determines if this group has role.
     *
     * @param string $role A role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRole(string $role): bool;

    /**
     * Remove a role.
     *
     * @param string $role The role.
     * @return GroupInterface Returns this group.
     */
    public function removeRole(string $role);

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return GroupInterface Returns this group.
     */
    public function setName(?string $name);

    /**
     * Set the roles.
     *
     * @param string[] $roles The roles.
     * @return GroupInterface Returns this group.
     */
    public function setRoles(array $roles);
}
