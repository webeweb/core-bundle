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

/**
 * Password updater trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Utility
 */
trait PasswordUpdaterTrait {

    /**
     * Password updater.
     *
     * @var PasswordUpdaterInterface|null
     */
    private $passwordUpdater;

    /**
     * Get the password updater.
     *
     * @return PasswordUpdaterInterface|null Returns the password updater.
     */
    public function getPasswordUpdater(): PasswordUpdaterInterface {
        return $this->passwordUpdater;
    }

    /**
     * Set the password updater.
     *
     * @param PasswordUpdaterInterface|null $passwordUpdater The password updater.
     * @return self Returns this instance.
     */
    protected function setPasswordUpdater(?PasswordUpdaterInterface $passwordUpdater): self {
        $this->passwordUpdater = $passwordUpdater;
        return $this;
    }
}