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
 * Grey color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait GreyColorProviderTrait {

    /**
     * Grey color provider.
     *
     * @var GreyColorProvider
     */
    private $greyColorProvider;

    /**
     * Get the grey color provider.
     *
     * @return GreyColorProvider|null Returns the grey color provider.
     */
    public function getGreyColorProvider(): ?GreyColorProvider {
        return $this->greyColorProvider;
    }

    /**
     * Set the grey color provider.
     *
     * @param GreyColorProvider|null $greyColorProvider The grey color provider.
     * @return self Returns this instance.
     */
    protected function setGreyColorProvider(?GreyColorProvider $greyColorProvider): self {
        $this->greyColorProvider = $greyColorProvider;
        return $this;
    }
}
