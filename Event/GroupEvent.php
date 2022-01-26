<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\RequestTrait;
use WBW\Bundle\CoreBundle\Model\GroupInterface;

/**
 * Group event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 */
class GroupEvent extends AbstractEvent {

    use RequestTrait;

    /**
     * Group.
     *
     * @var GroupInterface
     */
    private $group;

    /**
     * Constructor.
     *
     * @param GroupInterface $group The group.
     * @param Request $request The request.
     */
    public function __construct(GroupInterface $group, Request $request) {
        parent::__construct(get_class($this));

        $this->setGroup($group);
        $this->setRequest($request);
    }

    /**
     * Get the group.
     *
     * @return GroupInterface Returns the group.
     */
    public function getGroup(): GroupInterface {
        return $this->group;
    }

    /**
     * Set the group.
     *
     * @param GroupInterface $group The group.
     * @return GroupEvent Returns this group event.
     */
    protected function setGroup(GroupInterface $group): GroupEvent {
        $this->group = $group;
        return $this;
    }
}
