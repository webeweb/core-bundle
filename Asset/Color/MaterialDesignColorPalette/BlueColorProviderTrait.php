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
 * Blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait BlueColorProviderTrait {

    /**
     * Blue color provider.
     *
     * @var BlueColorProvider
     */
    private $blueColorProvider;

    /**
     * Get the blue color provider.
     *
     * @return BlueColorProvider|null Returns the blue color provider.
     */
    public function getBlueColorProvider(): ?BlueColorProvider {
        return $this->blueColorProvider;
    }

    /**
     * Set the blue color provider.
     *
     * @param BlueColorProvider|null $blueColorProvider The blue color provider.
     * @return self Returns this instance.
     * @return self Returns this instance.
     */
    protected function setBlueColorProvider(?BlueColorProvider $blueColorProvider): self {
        $this->blueColorProvider = $blueColorProvider;
        return $this;
    }
}
