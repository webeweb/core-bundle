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
 * White color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait WhiteColorProviderTrait {

    /**
     * White color provider.
     *
     * @var WhiteColorProvider
     */
    private $whiteColorProvider;

    /**
     * Get the white color provider.
     *
     * @return WhiteColorProvider|null Returns the white color provider.
     */
    public function getWhiteColorProvider(): ?WhiteColorProvider {
        return $this->whiteColorProvider;
    }

    /**
     * Set the white color provider.
     *
     * @param WhiteColorProvider|null $whiteColorProvider The white color provider.
     */
    protected function setWhiteColorProvider(?WhiteColorProvider $whiteColorProvider): self {
        $this->whiteColorProvider = $whiteColorProvider;
        return $this;
    }
}
