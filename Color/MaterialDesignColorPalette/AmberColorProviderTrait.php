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
 * Amber color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait AmberColorProviderTrait {

    /**
     * Amber color provider.
     *
     * @var AmberColorProvider|null
     */
    private $amberColorProvider;

    /**
     * Get the amber color provider.
     *
     * @return AmberColorProvider|null Returns the amber color provider.
     */
    public function getAmberColorProvider(): ?AmberColorProvider {
        return $this->amberColorProvider;
    }

    /**
     * Set the amber color provider.
     *
     * @param AmberColorProvider|null $amberColorProvider The amber color provider.
     * @return self Returns this instance.
     */
    protected function setAmberColorProvider(AmberColorProvider $amberColorProvider): self {
        $this->amberColorProvider = $amberColorProvider;
        return $this;
    }
}
