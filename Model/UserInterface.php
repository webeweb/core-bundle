<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;

// This is required to support apps that explicitly check if a user is an instance of AdvancedUserInterface
if (true === interface_exists("\Symfony\Component\Security\Core\User\AdvancedUserInterface")) {

    /**
     * User interface.
     *
     * @author webeweb <https://github.com/webeweb/>
     * @package WBW\Bundle\CoreBundle\Model
     */
    interface UserInterface extends FosUserInterface, \Symfony\Component\Security\Core\User\AdvancedUserInterface {

    }
} else {

    /**
     * User interface.
     *
     * @author webeweb <https://github.com/webeweb/>
     * @package WBW\Bundle\CoreBundle\Model
     */
    interface UserInterface extends FosUserInterface, BaseUserInterface, EquatableInterface {

    }
}
