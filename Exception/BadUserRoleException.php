<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Exception;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Model\OriginUrlTrait;
use WBW\Bundle\CoreBundle\Model\RedirectUrlTrait;
use WBW\Library\Core\Network\HTTP\HTTPInterface;

/**
 * Bad user role exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Exception
 */
class BadUserRoleException extends AbstractException {

    use OriginUrlTrait;
    use RedirectUrlTrait;

    /**
     * Roles.
     *
     * @var array
     */
    private $roles;

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
     * @param array $roles The roles.
     * @param string $redirectUrl The redirect.
     * @param string $originUrl The route.
     */
    public function __construct(UserInterface $user, array $roles, $redirectUrl, $originUrl) {
        parent::__construct(sprintf("User \"%s\" is not allowed to access to \"%s\" with roles [%s]", $user->getUsername(), $originUrl, implode(",", $roles)), HTTPInterface::HTTP_STATUS_FORBIDDEN);
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
     * Get the user.
     *
     * @return UserInterface Returns the user.
     */
    public function getUser() {
        return $this->user;
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

    /**
     * Set the user.
     *
     * @param UserInterface $user The user.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    protected function setUser(UserInterface $user) {
        $this->user = $user;
        return $this;
    }

}
