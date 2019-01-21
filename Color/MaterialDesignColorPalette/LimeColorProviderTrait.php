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
 * Lime color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait LimeColorProviderTrait {

    /**
     * Lime color provider.
     *
     * @var LimeColorProvider
     */
    private $limeColorProvider;

    /**
     * Get the lime color provider.
     *
     * @return LimeColorProvider Returns the lime color provider.
     */
    public function getLimeColorProvider() {
        return $this->limeColorProvider;
    }

    /**
     * Set the lime color provider.
     *
     * @param LimeColorProvider|null $limeColorProvider The lime color provider.
     */
    protected function setLimeColorProvider(LimeColorProvider $limeColorProvider = null) {
        $this->limeColorProvider = $limeColorProvider;
        return $this;
    }
}