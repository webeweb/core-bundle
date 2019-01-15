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
 * Blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait BlueColorProviderTrait {

    /**
     * Blue color provider.
     *
     * @var BlueColorProvider
     */
    private $blueColorProvider;

    /**
     * Get the blue color provider.
     *
     * @return BlueColorProvider Returns the blue color provider.
     */
    public function getBlueColorProvider() {
        return $this->blueColorProvider;
    }

    /**
     * Set the blue color provider.
     *
     * @param BlueColorProvider|null $blueColorProvider The blue color provider.
     */
    protected function setBlueColorProvider(BlueColorProvider $blueColorProvider = null) {
        $this->blueColorProvider = $blueColorProvider;
        return $this;
    }
}
