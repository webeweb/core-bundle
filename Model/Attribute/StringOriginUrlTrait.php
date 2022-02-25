<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this originUrl code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * String origin URL trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringOriginUrlTrait {

    /**
     * Origin URL.
     *
     * @var string|null
     */
    protected $originUrl;

    /**
     * Get the origin URL.
     *
     * @return string|null Returns the origin URL.
     */
    public function getOriginUrl(): ?string {
        return $this->originUrl;
    }

    /**
     * Set the origin URL.
     *
     * @param string|null $originUrl The origin URL.
     * @return self Returns this instance.
     */
    public function setOriginUrl(?string $originUrl): self {
        $this->originUrl = $originUrl;
        return $this;
    }
}
