<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this redirectUrl code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * String redirect URL trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringRedirectUrlTrait {

    /**
     * Redirect URL.
     *
     * @var string|null
     */
    protected $redirectUrl;

    /**
     * Get the redirect URL.
     *
     * @return string|null Returns the redirect URL.
     */
    public function getRedirectUrl(): ?string {
        return $this->redirectUrl;
    }

    /**
     * Set the redirect URL.
     *
     * @param string|null $redirectUrl The redirect URL.
     * @return self Returns this instance.
     */
    public function setRedirectUrl(?string $redirectUrl): self {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}
