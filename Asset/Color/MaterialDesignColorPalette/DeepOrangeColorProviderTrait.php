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
 * Deep orange color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait DeepOrangeColorProviderTrait {

    /**
     * Deep orange color provider.
     *
     * @var DeepOrangeColorProvider
     */
    private $deepOrangeColorProvider;

    /**
     * Get the deep orange color provider.
     *
     * @return DeepOrangeColorProvider|null Returns the deep orange color provider.
     */
    public function getDeepOrangeColorProvider(): ?DeepOrangeColorProvider {
        return $this->deepOrangeColorProvider;
    }

    /**
     * Set the deep orange color provider.
     *
     * @param DeepOrangeColorProvider|null $deepOrangeColorProvider The deep orange color provider.
     * @return self Returns this instance.
     */
    protected function setDeepOrangeColorProvider(?DeepOrangeColorProvider $deepOrangeColorProvider): self {
        $this->deepOrangeColorProvider = $deepOrangeColorProvider;
        return $this;
    }
}
