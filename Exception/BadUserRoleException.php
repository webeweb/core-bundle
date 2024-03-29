<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Exception;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Security\Core\User\UserTrait;
use WBW\Library\Traits\Strings\ArrayRolesTrait;
use WBW\Library\Traits\Strings\StringOriginUrlTrait;
use WBW\Library\Traits\Strings\StringRedirectUrlTrait;

/**
 * Bad user role exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Exception
 */
class BadUserRoleException extends AbstractException {

    use ArrayRolesTrait;
    use StringOriginUrlTrait;
    use StringRedirectUrlTrait;
    use UserTrait;

    /**
     * Constructor.
     *
     * @param UserInterface $user The user.
     * @param array $roles The roles.
     * @param string $redirectUrl The redirect.
     * @param string $originUrl The route.
     */
    public function __construct(UserInterface $user, array $roles, string $redirectUrl, string $originUrl) {

        $format  = 'User "%s" is not allowed to access to "%s" with roles [%s]';
        $message = sprintf($format, UserHelper::getIdentifier($user), $originUrl, implode(",", $roles));

        parent::__construct($message, 403);

        $this->setOriginUrl($originUrl);
        $this->setRedirectUrl($redirectUrl);
        $this->setRoles($roles);
        $this->setUser($user);
    }
}
