<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Utility;

use Exception;
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * Password updater interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Utility
 */
interface PasswordUpdaterInterface {

    /**
     * Hash a password.
     *
     * @param UserInterface $user The user.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function hashPassword(UserInterface $user): void;
}
