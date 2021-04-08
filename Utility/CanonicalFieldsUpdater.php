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

use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * Canonical fields updater.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Utility
 */
class CanonicalFieldsUpdater {

    /**
     * Email canonicalizer.
     *
     * @var CanonicalizerInterface
     */
    private $emailCanonicalizer;

    /**
     * Username canonicalizer.
     *
     * @var CanonicalizerInterface
     */
    private $usernameCanonicalizer;

    /**
     * Constructor.
     *
     * @param CanonicalizerInterface $usernameCanonicalizer The username canonicalizer.
     * @param CanonicalizerInterface $emailCanonicalizer The email canonicalizer.
     */
    public function __construct(CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer) {
        $this->setEmailCanonicalizer($emailCanonicalizer);
        $this->setUsernameCanonicalizer($usernameCanonicalizer);
    }

    /**
     * Canonicalize an email.
     *
     * @param string|null $email The email.
     * @return string|null Returns the canonicalized email.
     */
    public function canonicalizeEmail(?string $email) {
        return $this->getEmailCanonicalizer()->canonicalize($email);
    }

    /**
     * Canonicalize an username.
     *
     * @param string|null $username The username.
     * @return string|null Returns the canonicalized username.
     */
    public function canonicalizeUsername(?string $username) {
        return $this->getUsernameCanonicalizer()->canonicalize($username);
    }

    /**
     * Get the email canonicalizer.
     *
     * @return CanonicalizerInterface Returns the email canonicalizer.
     */
    public function getEmailCanonicalizer(): CanonicalizerInterface {
        return $this->emailCanonicalizer;
    }

    /**
     * Get the username canonicalizer.
     *
     * @return CanonicalizerInterface Returns the username canonicalizer.
     */
    public function getUsernameCanonicalizer(): CanonicalizerInterface {
        return $this->usernameCanonicalizer;
    }

    /**
     * Set the email canonicalizer.
     *
     * @param CanonicalizerInterface $emailCanonicalizer The email canonicalizer.
     * @return CanonicalFieldsUpdater Returns this canonical fields updater.
     */
    protected function setEmailCanonicalizer(CanonicalizerInterface $emailCanonicalizer): CanonicalFieldsUpdater {
        $this->emailCanonicalizer = $emailCanonicalizer;
        return $this;
    }

    /**
     * Set the username canonicalizer.
     *
     * @param CanonicalizerInterface $usernameCanonicalizer The username canonicalizer.
     * @return CanonicalFieldsUpdater Returns this canonical fields updater.
     */
    protected function setUsernameCanonicalizer(CanonicalizerInterface $usernameCanonicalizer): CanonicalFieldsUpdater {
        $this->usernameCanonicalizer = $usernameCanonicalizer;
        return $this;
    }

    /**
     * Update the canonical fields.
     *
     * @param UserInterface $user The user.
     * @return void
     */
    public function updateCanonicalFields(UserInterface $user): void {
        $user->setEmailCanonical($this->canonicalizeEmail($user->getEmail()));
        $user->setUsernameCanonical($this->canonicalizeUsername($user->getUsername()));
    }
}