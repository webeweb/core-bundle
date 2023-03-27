<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

/**
 * Compatibility service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait CompatibilityServiceTrait {

    /**
     * Compatibility service.
     *
     * @var CompatibilityServiceInterface|null
     */
    protected $compatibilityService;

    /**
     * Get the compatibility service.
     *
     * @return CompatibilityServiceInterface|null Returns the compatibility service.
     */
    public function getCompatibilityService(): ?CompatibilityServiceInterface {
        return $this->compatibilityService;
    }

    /**
     * Set the compatibility service.
     *
     * @param CompatibilityServiceInterface|null $compatibilityService The compatibility service.
     * @return self Returns this instance.
     */
    protected function setCompatibilityService(?CompatibilityServiceInterface $compatibilityService): self {
        $this->compatibilityService = $compatibilityService;
        return $this;
    }
}
