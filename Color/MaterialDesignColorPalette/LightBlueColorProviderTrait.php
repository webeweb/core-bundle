<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette;

/**
 * Light blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait LightBlueColorProviderTrait {

    /**
     * Light blue color provider.
     *
     * @var LightBlueColorProvider
     */
    private $lightBlueColorProvider;

    /**
     * Get the light blue color provider.
     *
     * @return LightBlueColorProvider Returns the light blue color provider.
     */
    public function getLightBlueColorProvider() {
        return $this->lightBlueColorProvider;
    }

    /**
     * Set the light blue color provider.
     *
     * @param LightBlueColorProvider|null $lightBlueColorProvider The light blue color provider.
     */
    protected function setLightBlueColorProvider(LightBlueColorProvider $lightBlueColorProvider = null) {
        $this->lightBlueColorProvider = $lightBlueColorProvider;
        return $this;
    }
}
