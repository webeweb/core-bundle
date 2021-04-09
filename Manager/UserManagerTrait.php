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
 * User manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
trait UserManagerTrait {

    /**
     * User manager.
     *
     * @var UserManagerInterface|null
     */
    private $userManager;

    /**
     * Get the user manager.
     *
     * @return UserManagerInterface|null Returns the user manager.
     */
    public function getUserManager(): ?UserManagerInterface {
        return $this->userManager;
    }

    /**
     * Set the user manager.
     *
     * @param UserManagerInterface|null $userManager The user manager.
     * @return self Returns this instance.
     */
    protected function setUserManager(?UserManagerInterface $userManager): self {
        $this->userManager = $userManager;
        return $this;
    }

}