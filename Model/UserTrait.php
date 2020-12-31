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
     * @var UserInterface|null
     */
    private $user;

    /**
     * Get the user.
     *
     * @return UserInterface|null Returns the user.
     */
    public function getUser(): ?UserInterface {
        return $this->user;
    }

    /**
     * Set the user.
     *
     * @param UserInterface|null $user The user.
     */
    protected function setUser(?UserInterface $user): ?self {
        $this->user = $user;
        return $this;
    }
}
