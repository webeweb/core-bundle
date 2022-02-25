<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Manager;

use WBW\Bundle\CoreBundle\Manager\UserManager;
use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

/**
 * Test user manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager
 */
class TestUserManager extends UserManager {

    /**
     * {@inheritDoc}
     */
    public function deleteUser(UserInterface $user): void {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function findUserBy(array $criteria): ?UserInterface {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function findUsers(): array {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(): ?string {
        return TestUser::class;
    }

    /**
     * {@inheritDoc}
     */
    public function reloadUser(UserInterface $user): void {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function updateUser(UserInterface $user): void {
        // NOTHING TO DO
    }
}
