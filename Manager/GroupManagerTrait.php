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

/**
 * Group manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
trait GroupManagerTrait {

    /**
     * Group manager.
     *
     * @var GroupManagerInterface|null
     */
    private $groupManager;

    /**
     * Get the group manager.
     *
     * @return GroupManagerInterface|null Returns the group manager.
     */
    public function getGroupManager(): ?GroupManagerInterface {
        return $this->groupManager;
    }

    /**
     * Set the group manager.
     *
     * @param GroupManagerInterface|null $groupManager The group manager.
     * @return self Returns this instance.
     */
    protected function setGroupManager(?GroupManagerInterface $groupManager): self {
        $this->groupManager = $groupManager;
        return $this;
    }
}
