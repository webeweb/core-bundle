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
 * Orange color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait OrangeColorProviderTrait {

    /**
     * Orange color provider.
     *
     * @var OrangeColorProvider
     */
    private $orangeColorProvider;

    /**
     * Get the orange color provider.
     *
     * @return OrangeColorProvider Returns the orange color provider.
     */
    public function getOrangeColorProvider() {
        return $this->orangeColorProvider;
    }

    /**
     * Set the orange color provider.
     *
     * @param OrangeColorProvider|null $orangeColorProvider The orange color provider.
     */
    protected function setOrangeColorProvider(OrangeColorProvider $orangeColorProvider = null) {
        $this->orangeColorProvider = $orangeColorProvider;
        return $this;
    }
}
