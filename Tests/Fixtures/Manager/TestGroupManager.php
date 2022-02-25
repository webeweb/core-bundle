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

use WBW\Bundle\CoreBundle\Manager\GroupManager;
use WBW\Bundle\CoreBundle\Model\GroupInterface;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestGroup;

/**
 * Test group manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager
 */
class TestGroupManager extends GroupManager {

    /**
     * {@inheritDoc}
     */
    public function deleteGroup(GroupInterface $group): void {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function findGroupBy(array $criteria): ?GroupInterface {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function findGroups(): array {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(): ?string {
        return TestGroup::class;
    }

    /**
     * {@inheritDoc}
     */
    public function updateGroup(GroupInterface $group): void {
        // NOTHING TO DO
    }
}
