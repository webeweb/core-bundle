<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette;

/**
 * Deep purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait DeepPurpleColorProviderTrait {

    /**
     * Deep purple color provider.
     *
     * @var DeepPurpleColorProvider
     */
    private $deepPurpleColorProvider;

    /**
     * Get the deep purple color provider.
     *
     * @return DeepPurpleColorProvider|null Returns the deep purple color provider.
     */
    public function getDeepPurpleColorProvider(): ?DeepPurpleColorProvider {
        return $this->deepPurpleColorProvider;
    }

    /**
     * Set the deep purple color provider.
     *
     * @param DeepPurpleColorProvider|null $deepPurpleColorProvider The deep purple color provider.
     * @return self Returns this instance.
     */
    protected function setDeepPurpleColorProvider(?DeepPurpleColorProvider $deepPurpleColorProvider): self {
        $this->deepPurpleColorProvider = $deepPurpleColorProvider;
        return $this;
    }
}
