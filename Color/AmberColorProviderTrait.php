<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

/**
 * Amber color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 * @deprecated since Core bundle 1.8.0, use {@see WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\AmberColorProviderTrait} instead.
 */
trait AmberColorProviderTrait {

    /**
     * Amber color provider.
     *
     * @var AmberColorProvider
     */
    private $amberColorProvider;

    /**
     * Get the amber color provider.
     *
     * @return AmberColorProvider Returns the amber color provider.
     */
    public function getAmberColorProvider() {
        return $this->amberColorProvider;
    }

    /**
     * Set the amber color provider.
     *
     * @param AmberColorProvider|null $amberColorProvider The amber color provider.
     */
    protected function setAmberColorProvider(AmberColorProvider $amberColorProvider = null) {
        $this->amberColorProvider = $amberColorProvider;
        return $this;
    }
}
