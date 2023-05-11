<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class UserHelper {

    /**
     * Get the identifier.
     *
     * @param UserInterface $user The user.
     * @return string|null Returns the identifier.
     */
    public static function getIdentifier(UserInterface $user): ?string {

        // TODO: Remove when dropping support for Symfony 5
        if (Kernel::MAJOR_VERSION < 6) {
            return $user->getUsername();
        }

        return $user->getUserIdentifier();
    }
}
