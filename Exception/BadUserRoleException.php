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
use WBW\Bundle\CoreBundle\Model\Attribute\StringOriginUrlTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringRedirectUrlTrait;
use WBW\Bundle\CoreBundle\Model\UserTrait;

/**
 * Bad user role exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Exception
 */
class BadUserRoleException extends AbstractException {

    use StringOriginUrlTrait;
    use StringRedirectUrlTrait;
    use UserTrait;

    /**
     * Roles.
     *
     * @var array
     */
    private $roles;

    /**
     * Constructor.
     *
     * @param UserInterface $user The user.
     * @param array $roles The roles.
     * @param string $redirectUrl The redirect.
     * @param string $originUrl The route.
     */
    public function __construct(UserInterface $user, array $roles, $redirectUrl, $originUrl) {
        $format = 'User "%s" is not allowed to access to "%s" with roles [%s]';
        parent::__construct(sprintf($format, $user->getUsername(), $originUrl, implode(",", $roles)), 403);
        $this->setOriginUrl($originUrl);
        $this->setRedirectUrl($redirectUrl);
        $this->setRoles($roles);
        $this->setUser($user);
    }

    /**
     * Get the roles.
     *
     * @return array Returns the roles.
     */
    public function getRoles() {
        return $this->roles;
    }

    /**
     * Set the roles;
     *
     * @param array $roles The roles.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    protected function setRoles(array $roles) {
        $this->roles = $roles;
        return $this;
    }
}
