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
 * Light green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait LightGreenColorProviderTrait {

    /**
     * Light green color provider.
     *
     * @var LightGreenColorProvider
     */
    private $lightGreenColorProvider;

    /**
     * Get the light green color provider.
     *
     * @return LightGreenColorProvider|null Returns the light green color provider.
     */
    public function getLightGreenColorProvider(): ?LightGreenColorProvider {
        return $this->lightGreenColorProvider;
    }

    /**
     * Set the light green color provider.
     *
     * @param LightGreenColorProvider|null $lightGreenColorProvider The light green color provider.
     * @return self Returns this instance.
     */
    protected function setLightGreenColorProvider(?LightGreenColorProvider $lightGreenColorProvider): self {
        $this->lightGreenColorProvider = $lightGreenColorProvider;
        return $this;
    }
}
