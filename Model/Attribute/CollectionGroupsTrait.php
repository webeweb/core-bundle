<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

use Doctrine\Common\Collections\Collection;
use WBW\Bundle\CoreBundle\Model\GroupInterface;

/**
 * Collection groups trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait CollectionGroupsTrait {

    /**
     * Groups.
     *
     * @var Collection
     */
    protected $groups;

    /**
     * Add a group.
     *
     * @param GroupInterface $group The group.
     * @return self Returns this instance.
     */
    public function addGroup(GroupInterface $group): self {
        if (false === $this->getGroups()->contains($group)) {
            $this->getGroups()->add($group);
        }
        return $this;
    }

    /**
     * Get the group names.
     *
     * @return string[] Returns the group names.
     */
    public function getGroupNames(): array {

        $names = [];

        /** @var GroupInterface $current */
        foreach ($this->getGroups() as $current) {
            $names[] = $current->getName();
        }

        return $names;
    }

    /**
     * Get the groups.
     *
     * @return Collection Returns the groups.
     */
    public function getGroups(): Collection {
        return $this->groups;
    }

    /**
     * Determines if the groups contains a group.
     *
     * @param string $name The name.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasGroup(string $name): bool {
        return in_array($name, $this->getGroupNames());
    }

    /**
     * Remove a group.
     *
     * @param GroupInterface $group The group.
     * @return self Returns this instance.
     */
    public function removeGroup(GroupInterface $group): self {
        if (true === $this->getGroups()->contains($group)) {
            $this->getGroups()->removeElement($group);
        }
        return $this;
    }

    /**
     * Set the groups.
     *
     * @param Collection $groups The groups.
     * @return self Returns this instance.
     */
    protected function setGroups(Collection $groups): self {
        $this->groups = $groups;
        return $this;
    }
}
