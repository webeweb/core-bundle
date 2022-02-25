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
 * Green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait GreenColorProviderTrait {

    /**
     * Green color provider.
     *
     * @var GreenColorProvider
     */
    private $greenColorProvider;

    /**
     * Get the green color provider.
     *
     * @return GreenColorProvider|null Returns the green color provider.
     */
    public function getGreenColorProvider(): ?GreenColorProvider {
        return $this->greenColorProvider;
    }

    /**
     * Set the green color provider.
     *
     * @param GreenColorProvider|null $greenColorProvider The green color provider.
     * @return self Returns this instance.
     */
    protected function setGreenColorProvider(?GreenColorProvider $greenColorProvider): self {
        $this->greenColorProvider = $greenColorProvider;
        return $this;
    }
}
