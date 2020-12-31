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
 * Indigo color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait IndigoColorProviderTrait {

    /**
     * Indigo color provider.
     *
     * @var IndigoColorProvider
     */
    private $indigoColorProvider;

    /**
     * Get the indigo color provider.
     *
     * @return IndigoColorProvider|null Returns the indigo color provider.
     */
    public function getIndigoColorProvider(): ?IndigoColorProvider {
        return $this->indigoColorProvider;
    }

    /**
     * Set the indigo color provider.
     *
     * @param IndigoColorProvider|null $indigoColorProvider The indigo color provider.
     */
    protected function setIndigoColorProvider(?IndigoColorProvider $indigoColorProvider): self {
        $this->indigoColorProvider = $indigoColorProvider;
        return $this;
    }
}
