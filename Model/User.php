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

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;
use WBW\Bundle\CoreBundle\Model\Attribute\ArrayRolesTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\CollectionGroupsTrait;
use WBW\Library\Traits\Booleans\BooleanEnabledTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringEmailTrait;
use WBW\Library\Traits\Strings\StringPasswordTrait;
use WBW\Library\Traits\Strings\StringUsernameTrait;

/**
 * User.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 * @abstract
 */
abstract class User implements UserInterface, GroupableInterface {

    use ArrayRolesTrait;
    use BooleanEnabledTrait;
    use CollectionGroupsTrait;
    use IntegerIdTrait;
    use StringEmailTrait;
    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * Confirmation token.
     *
     * @var string|null
     */
    protected $confirmationToken;

    /**
     * Canonical email.
     *
     * @var string|null
     */
    protected $emailCanonical;

    /**
     * Last login.
     *
     * @var DateTime|null
     */
    protected $lastLogin;

    /**
     * Password requested at.
     *
     * @var DateTime|null
     */
    protected $passwordRequestedAt;

    /**
     * Plain password.
     *
     * @var string|null
     */
    protected $plainPassword;

    /**
     * Salt.
     *
     * @var string|null
     */
    protected $salt;

    /**
     * Canonical username.
     *
     * @var string|null
     */
    protected $usernameCanonical;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setEnabled(false);
        $this->setGroups(new ArrayCollection());
        $this->setRoles([]);
    }

    /**
     * Convert this instance into string.
     *
     * @return string|null Returns this instance converted into string.
     */
    public function __toString(): ?string {
        return $this->getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials() {
        $this->setPlainPassword(null);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken(): ?string {
        return $this->confirmationToken;
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical(): ?string {
        return $this->emailCanonical;
    }

    /**
     * Get the last login.
     *
     * @return DateTime|null Returns the last login.
     */
    public function getLastLogin(): ?DateTime {
        return $this->lastLogin;
    }

    /**
     * Get the password request at.
     *
     * @return DateTime|null Returns the password requested at.
     */
    public function getPasswordRequestedAt(): ?DateTime {
        return $this->passwordRequestedAt;
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword(): ?string {
        return $this->plainPassword;
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array {

        $buffer = $this->roles;

        /** @var GroupInterface $current */
        foreach ($this->getGroups() as $current) {
            $buffer = array_merge($buffer, $current->getRoles());
        }

        // We need to make sure to have at least one role
        $buffer[] = self::ROLE_DEFAULT;

        return array_values(array_unique($buffer));
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string {
        return $this->salt;
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical(): ?string {
        return $this->usernameCanonical;
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired(): bool {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked(): bool {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired(): bool {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled(): ?bool {
        return $this->getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isEqualTo(BaseUserInterface $user): bool {

        if (false === ($user instanceof self)) {
            return false;
        }

        if ($this->getPassword() !== $user->getPassword()) {
            return false;
        }

        if ($this->getSalt() !== $user->getSalt()) {
            return false;
        }

        if ($this->getUsername() !== $user->getUsername()) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired(?int $ttl): bool {
        return null !== $this->getPasswordRequestedAt() && time() < $this->getPasswordRequestedAt()->getTimestamp() + $ttl;
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin(): bool {
        return $this->hasRole(self::ROLE_SUPER_ADMIN);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize(): ?string {
        return serialize([
            $this->getId(),
            $this->getEmail(),
            $this->getEmailCanonical(),
            $this->getEnabled(),
            $this->getPassword(),
            $this->getSalt(),
            $this->getUsername(),
            $this->getUsernameCanonical(),
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken(?string $confirmationToken): UserInterface {
        $this->confirmationToken = $confirmationToken;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical(?string $emailCanonical): UserInterface {
        $this->emailCanonical = $emailCanonical;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(?DateTime $lastLogin): UserInterface {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(?DateTime $passwordRequestedAt): UserInterface {
        $this->passwordRequestedAt = $passwordRequestedAt;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword(?string $plainPassword): UserInterface {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt(?string $salt): UserInterface {
        $this->salt = $salt;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin(?bool $superAdmin): UserInterface {

        if (true === $superAdmin) {
            $this->addRole(self::ROLE_SUPER_ADMIN);
        } else {
            $this->removeRole(self::ROLE_SUPER_ADMIN);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical(?string $usernameCanonical): UserInterface {
        $this->usernameCanonical = $usernameCanonical;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized): void {

        $data = unserialize($serialized);

        $this->setId($data[0]);
        $this->setEmail($data[1]);
        $this->setEmailCanonical($data[2]);
        $this->setEnabled($data[3]);
        $this->setPassword($data[4]);
        $this->setSalt($data[5]);
        $this->setUsername($data[6]);
        $this->setUsernameCanonical($data[7]);
    }
}