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
 * Green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 * @deprecated since Core bundle 1.8.0, use {@see WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\GreenColorProviderTrait} instead.
 */
trait GreenColorProviderTrait {

    /**
     * Green color provider.
     *
     * @var GreenColorProvider
     */
    private $greenColorProvider;

    /**
     * Get the green color provider.
     *
     * @return GreenColorProvider Returns the green color provider.
     */
    public function getGreenColorProvider() {
        return $this->greenColorProvider;
    }

    /**
     * Set the green color provider.
     *
     * @param GreenColorProvider|null $greenColorProvider The green color provider.
     */
    protected function setGreenColorProvider(GreenColorProvider $greenColorProvider = null) {
        $this->greenColorProvider = $greenColorProvider;
        return $this;
    }
}
