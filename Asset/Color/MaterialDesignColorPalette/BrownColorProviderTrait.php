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
 * Brown color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait BrownColorProviderTrait {

    /**
     * Brown color provider.
     *
     * @var BrownColorProvider
     */
    private $brownColorProvider;

    /**
     * Get the brown color provider.
     *
     * @return BrownColorProvider|null Returns the brown color provider.
     */
    public function getBrownColorProvider(): ?BrownColorProvider {
        return $this->brownColorProvider;
    }

    /**
     * Set the brown color provider.
     *
     * @param BrownColorProvider|null $brownColorProvider The brown color provider.
     * @return self Returns this instance.
     */
    protected function setBrownColorProvider(?BrownColorProvider $brownColorProvider): self {
        $this->brownColorProvider = $brownColorProvider;
        return $this;
    }
}
