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
 * Brown color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
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
     * @return BrownColorProvider Returns the brown color provider.
     */
    public function getBrownColorProvider() {
        return $this->brownColorProvider;
    }

    /**
     * Set the brown color provider.
     *
     * @param BrownColorProvider $brownColorProvider The brown color provider.
     */
    protected function setBrownColorProvider(BrownColorProvider $brownColorProvider = null) {
        $this->brownColorProvider = $brownColorProvider;
        return $this;
    }

}
