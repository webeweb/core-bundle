<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\Security\Csrf;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

/**
 * CSRF token manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Component\Security\Csrf
 */
trait CsrfTokenManagerTrait {

    /**
     * CSRF token manager.
     *
     * @var CsrfTokenManagerInterface|null
     */
    private $csrfTokenManager;

    /**
     * Get the CSRF token manager.
     *
     * @return CsrfTokenManagerInterface|null Returns the CSRF token manager.
     */
    public function getCsrfTokenManager(): ?CsrfTokenManagerInterface {
        return $this->csrfTokenManager;
    }

    /**
     * Set the CSRF token manager.
     *
     * @param CsrfTokenManagerInterface|null $csrfTokenManager The CSRF token manager.
     * @return self Returns this instance.
     */
    protected function setCsrfTokenManager(?CsrfTokenManagerInterface $csrfTokenManager): self {
        $this->csrfTokenManager = $csrfTokenManager;
        return $this;
    }
}
