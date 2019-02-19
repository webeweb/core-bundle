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
 * Black color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait BlackColorProviderTrait {

    /**
     * Black color provider.
     *
     * @var BlackColorProvider
     */
    private $blackColorProvider;

    /**
     * Get the black color provider.
     *
     * @return BlackColorProvider Returns the black color provider.
     */
    public function getBlackColorProvider() {
        return $this->blackColorProvider;
    }

    /**
     * Set the black color provider.
     *
     * @param BlackColorProvider|null $blackColorProvider The black color provider.
     */
    protected function setBlackColorProvider(BlackColorProvider $blackColorProvider = null) {
        $this->blackColorProvider = $blackColorProvider;
        return $this;
    }
}
