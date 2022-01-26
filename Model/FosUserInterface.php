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

use DateTime;
use Serializable;

/**
 * User interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
interface FosUserInterface extends Serializable {

    /**
     * Role "default".
     *
     * @var string
     */
    const ROLE_DEFAULT = "ROLE_USER";

    /**
     * Role "super admin".
     *
     * @var string
     */
    const ROLE_SUPER_ADMIN = "ROLE_SUPER_ADMIN";

    /**
     * Add a role.
     *
     * @param string $role The role.
     * @return UserInterface Returns this user.
     */
    public function addRole(string $role);

    /**
     * Get the confirmation token.
     *
     * @return string|null Returns the confirmation token.
     */
    public function getConfirmationToken(): ?string;

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string;

    /**
     * Get the canonical email.
     *
     * @return string|null Returns the canonical email.
     */
    public function getEmailCanonical(): ?string;

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int;

    /**
     * Get the plain password.
     *
     * @return string|null Returns the plain password.
     */
    public function getPlainPassword(): ?string;

    /**
     * Get the roles.
     *
     * @return string[] Returns the roles.
     */
    public function getRoles(): array;

    /**
     * Get the canonical username.
     *
     * @return string|null Returns the canonical username.
     */
    public function getUsernameCanonical(): ?string;

    /**
     * Determines if this group has role.
     *
     * @param string $role A role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRole(string $role): bool;

    /**
     * Determines if this user is expired.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isAccountNonExpired(): bool;

    /**
     * Determines if this user is locked.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isAccountNonLocked(): bool;

    /**
     * Determines if this user is enabled.
     *
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function isEnabled(): ?bool;

    /**
     * Determines if this user has a password request non expired.
     *
     * @param int|null $ttl
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isPasswordRequestNonExpired(?int $ttl): bool;

    /**
     * Determines if this users is a super admin.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isSuperAdmin(): bool;

    /**
     * Remove a role.
     *
     * @param string $role The role.
     * @return UserInterface Returns this user.
     */
    public function removeRole(string $role);

    /**
     * Set the confirmation token.
     *
     * @param string|null $confirmationToken The confirmation token.
     * @return UserInterface Returns this user.
     */
    public function setConfirmationToken(?string $confirmationToken): UserInterface;

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return UserInterface Returns this user.
     */
    public function setEmail(?string $email);

    /**
     * Set the canonical email.
     *
     * @param string|null $emailCanonical The canonical email.
     * @return UserInterface Returns this user.
     */
    public function setEmailCanonical(?string $emailCanonical): UserInterface;

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return UserInterface Returns this user.
     */
    public function setEnabled(?bool $enabled);

    /**
     * Set the last login.
     *
     * @param DateTime|null $lastLogin The last login?
     * @return UserInterface Returns this user.
     */
    public function setLastLogin(?DateTime $lastLogin): UserInterface;

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return UserInterface Returns this user.
     */
    public function setPassword(?string $password);

    /**
     * Set the password requested at.
     *
     * @param DateTime|null $passwordRequestedAt The password requested at.
     * @return UserInterface Returns this user.
     */
    public function setPasswordRequestedAt(?DateTime $passwordRequestedAt): UserInterface;

    /**
     * Set the plain password.
     *
     * @param string|null $plainPassword The plain password.
     * @return UserInterface Returns the plain password.
     */
    public function setPlainPassword(?string $plainPassword): UserInterface;

    /**
     * Set the roles.
     *
     * @param string[] $roles The roles.
     * @return UserInterface Returns this user.
     */
    public function setRoles(array $roles);

    /**
     * Set the salt.
     *
     * @param string|null $salt The salt.
     * @return UserInterface Returns this user.
     */
    public function setSalt(?string $salt): UserInterface;

    /**
     * Set the super admin.
     *
     * @param bool|null $superAdmin The super admin.
     * @return UserInterface Returns this user.
     */
    public function setSuperAdmin(?bool $superAdmin): UserInterface;

    /**
     * Set the username.
     *
     * @param string|null $username The username.
     * @return UserInterface Returns this user.
     */
    public function setUsername(?string $username);

    /**
     * Set the canonical username.
     *
     * @param string|null $usernameCanonical The canonical username.
     * @return UserInterface Returns this user.
     */
    public function setUsernameCanonical(?string $usernameCanonical): UserInterface;
}
