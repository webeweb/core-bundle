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
 * Cyan color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait CyanColorProviderTrait {

    /**
     * Cyan color provider.
     *
     * @var CyanColorProvider
     */
    private $cyanColorProvider;

    /**
     * Get the cyan color provider.
     *
     * @return CyanColorProvider|null Returns the cyan color provider.
     */
    public function getCyanColorProvider(): ?CyanColorProvider {
        return $this->cyanColorProvider;
    }

    /**
     * Set the cyan color provider.
     *
     * @param CyanColorProvider|null $cyanColorProvider The cyan color provider.
     * @return self Returns this instance.
     */
    protected function setCyanColorProvider(?CyanColorProvider $cyanColorProvider): self {
        $this->cyanColorProvider = $cyanColorProvider;
        return $this;
    }
}
