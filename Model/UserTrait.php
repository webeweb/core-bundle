<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
trait UserTrait {

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

    /**
     * Get the user.
     *
     * @return UserInterface Returns the user.
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set the user.
     *
     * @param UserInterface $user The user.
     */
    protected function setUser(UserInterface $user = null) {
        $this->user = $user;
        return $this;
    }

}
