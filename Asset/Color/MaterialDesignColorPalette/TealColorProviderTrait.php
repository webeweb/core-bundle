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
 * Teal color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette
 */
trait TealColorProviderTrait {

    /**
     * Teal color provider.
     *
     * @var TealColorProvider
     */
    private $tealColorProvider;

    /**
     * Get the teal color provider.
     *
     * @return TealColorProvider|null Returns the teal color provider.
     */
    public function getTealColorProvider(): ?TealColorProvider {
        return $this->tealColorProvider;
    }

    /**
     * Set the teal color provider.
     *
     * @param TealColorProvider|null $tealColorProvider The teal color provider.
     * @return self Returns this instance.
     */
    protected function setTealColorProvider(?TealColorProvider $tealColorProvider): self {
        $this->tealColorProvider = $tealColorProvider;
        return $this;
    }
}
