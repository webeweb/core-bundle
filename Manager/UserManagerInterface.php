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

use Exception;
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * User manager interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
interface UserManagerInterface {

    /**
     * Create a user.
     *
     * @return UserInterface
     */
    public function createUser(): UserInterface;

    /**
     * Delete an user.
     *
     * @param UserInterface $user The user.
     * @return void
     */
    public function deleteUser(UserInterface $user): void;

    /**
     * Find an user.
     *
     * @param array $criteria The criteria.
     * @return UserInterface|null Returns the user.
     */
    public function findUserBy(array $criteria): ?UserInterface;

    /**
     * Find an user.
     *
     * @param string $token The token.
     * @return UserInterface|null Returns the user.
     */
    public function findUserByConfirmationToken(string $token): ?UserInterface;

    /**
     * Find an user.
     *
     * @param string $email The email.
     * @return UserInterface|null Returns the user.
     */
    public function findUserByEmail(string $email): ?UserInterface;

    /**
     * Find an user.
     *
     * @param string $username The username.
     * @return UserInterface|null Returns the user.
     */
    public function findUserByUsername(string $username): ?UserInterface;

    /**
     * Find an user.
     *
     * @param string $usernameOrEmail The username or email.
     * @return UserInterface|null Returns the user.
     */
    public function findUserByUsernameOrEmail(string $usernameOrEmail): ?UserInterface;

    /**
     * Find all users.
     *
     * @return UserInterface[] Returns the users.
     */
    public function findUsers(): array;

    /**
     * Get the class.
     *
     * @return string|null Returns the class.
     */
    public function getClass(): ?string;

    /**
     * Reload an user.
     *
     * @param UserInterface $user The user.
     * @return void
     */
    public function reloadUser(UserInterface $user): void;

    /**
     * Update the canonical fields.
     *
     * @param UserInterface $user The user.
     * @return void
     */
    public function updateCanonicalFields(UserInterface $user): void;

    /**
     * Update the password.
     *
     * @param UserInterface $user The user.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function updatePassword(UserInterface $user): void;

    /**
     * Update an user.
     *
     * @param UserInterface $user The user.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function updateUser(UserInterface $user): void;
}
