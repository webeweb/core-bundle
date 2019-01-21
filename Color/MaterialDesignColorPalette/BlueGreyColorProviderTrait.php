<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette;

/**
 * Blue grey color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait BlueGreyColorProviderTrait {

    /**
     * Blue grey color provider.
     *
     * @var BlueGreyColorProvider
     */
    private $blueGreyColorProvider;

    /**
     * Get the blue grey color provider.
     *
     * @return BlueGreyColorProvider Returns the blue grey color provider.
     */
    public function getBlueGreyColorProvider() {
        return $this->blueGreyColorProvider;
    }

    /**
     * Set the blue grey color provider.
     *
     * @param BlueGreyColorProvider|null $blueGreyColorProvider The blue grey color provider.
     */
    protected function setBlueGreyColorProvider(BlueGreyColorProvider $blueGreyColorProvider = null) {
        $this->blueGreyColorProvider = $blueGreyColorProvider;
        return $this;
    }
}
