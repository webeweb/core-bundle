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

use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdaterTrait;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdaterInterface;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdaterTrait;

/**
 * User manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class UserManager implements UserManagerInterface {

    use CanonicalFieldsUpdaterTrait;
    use PasswordUpdaterTrait;

    /**
     * Constructor.
     *
     * @param PasswordUpdaterInterface $passwordUpdater The password updater.
     * @param CanonicalFieldsUpdater $canonicalFieldsUpdater The canonical fields updater.
     */
    public function __construct(PasswordUpdaterInterface $passwordUpdater, CanonicalFieldsUpdater $canonicalFieldsUpdater) {
        $this->setCanonicalFieldsUpdater($canonicalFieldsUpdater);
        $this->setPasswordUpdater($passwordUpdater);
    }

    /**
     * {@inheritdoc}
     */
    public function createUser(): UserInterface {

        $class = $this->getClass();

        return new $class();
    }

    /**
     * {@inheritdoc}
     */
    public function findUserByConfirmationToken(string $token): ?UserInterface {
        return $this->findUserBy([
            "confirmationToken" => $token,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserByEmail(string $email): ?UserInterface {
        return $this->findUserBy([
            "emailCanonical" => $this->getCanonicalFieldsUpdater()->canonicalizeEmail($email),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserByUsername(string $username): ?UserInterface {
        return $this->findUserBy([
            "usernameCanonical" => $this->getCanonicalFieldsUpdater()->canonicalizeUsername($username),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserByUsernameOrEmail(string $usernameOrEmail): ?UserInterface {

        if (1 === preg_match('/^.+\@\S+\.\S+$/', $usernameOrEmail)) {

            $user = $this->findUserByEmail($usernameOrEmail);
            if (null !== $user) {
                return $user;
            }
        }

        return $this->findUserByUsername($usernameOrEmail);
    }

    /**
     * {@inheritdoc}
     */
    public function updateCanonicalFields(UserInterface $user): void {
        $this->getCanonicalFieldsUpdater()->updateCanonicalFields($user);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePassword(UserInterface $user): void {
        $this->getPasswordUpdater()->hashPassword($user);
    }
}
