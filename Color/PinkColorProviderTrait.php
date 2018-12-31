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
 * Pink color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait PinkColorProviderTrait {

    /**
     * Pink color provider.
     *
     * @var PinkColorProvider
     */
    private $pinkColorProvider;

    /**
     * Get the pink color provider.
     *
     * @return PinkColorProvider Returns the pink color provider.
     */
    public function getPinkColorProvider() {
        return $this->pinkColorProvider;
    }

    /**
     * Set the pink color provider.
     *
     * @param PinkColorProvider $pinkColorProvider The pink color provider.
     */
    protected function setPinkColorProvider(PinkColorProvider $pinkColorProvider = null) {
        $this->pinkColorProvider = $pinkColorProvider;
        return $this;
    }

}
