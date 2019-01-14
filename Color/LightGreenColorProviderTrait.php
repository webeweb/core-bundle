<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

/**
 * Light green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
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
     * @return LightGreenColorProvider Returns the light green color provider.
     */
    public function getLightGreenColorProvider() {
        return $this->lightGreenColorProvider;
    }

    /**
     * Set the light green color provider.
     *
     * @param LightGreenColorProvider $lightGreenColorProvider The light green color provider.
     */
    protected function setLightGreenColorProvider(LightGreenColorProvider $lightGreenColorProvider = null) {
        $this->lightGreenColorProvider = $lightGreenColorProvider;
        return $this;
    }
}
