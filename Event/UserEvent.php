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
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * User event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 */
class UserEvent extends AbstractEvent {

    use RequestTrait;

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

    /**
     * Constructor.
     *
     * @param UserInterface $user The user.
     * @param Request $request The request.
     */
    public function __construct(UserInterface $user, Request $request) {
        parent::__construct(get_class($this));

        $this->setUser($user);
        $this->setRequest($request);
    }

    /**
     * Get the user.
     *
     * @return UserInterface Returns the event.
     */
    public function getUser(): UserInterface {
        return $this->user;
    }

    /**
     * Set the user.
     *
     * @param UserInterface $user The user.
     * @return UserEvent Returns this user event.
     */
    protected function setUser(UserInterface $user): UserEvent {
        $this->user = $user;
        return $this;
    }
}
