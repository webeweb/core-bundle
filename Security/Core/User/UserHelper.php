<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Security\Core\User;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Security\Core\User
 */
class UserHelper {

    /**
     * Determine if the connected user entity has roles.
     *
     * @param mixed|null $user The user.
     * @param string|array $roles The role or roles.
     * @param bool $or OR ? If true, matches a role cause a break and the method returns true.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasRoles($user, $roles, bool $or = true): bool {

        if (false === ($user instanceof UserInterface)) {
            return false;
        }

        if (false === is_array($roles)) {
            $roles = [$roles];
        }

        $result = 1 <= count($roles);

        foreach ($roles as $role) {

            $buffer = in_array($role, $user->getRoles());

            if (true === $buffer && true === $or) {
                $result = $buffer;
                break;
            }

            $result &= $buffer;
        }

        return $result;
    }
}
