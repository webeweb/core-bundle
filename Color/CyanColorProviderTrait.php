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
 * Cyan color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait CyanColorProviderTrait {

    /**
     * Cyan color provider.
     *
     * @var CyanColorProvider
     */
    private $cyanColorProvider;

    /**
     * Get the cyan color provider.
     *
     * @return CyanColorProvider Returns the cyan color provider.
     */
    public function getCyanColorProvider() {
        return $this->cyanColorProvider;
    }

    /**
     * Set the cyan color provider.
     *
     * @param CyanColorProvider|null $cyanColorProvider The cyan color provider.
     */
    protected function setCyanColorProvider(CyanColorProvider $cyanColorProvider = null) {
        $this->cyanColorProvider = $cyanColorProvider;
        return $this;
    }
}
