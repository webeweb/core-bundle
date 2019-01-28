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
 * Purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 * @deprecated since Core bundle 1.8.0, use {@see WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PurpleColorProviderTrait} instead.
 */
trait PurpleColorProviderTrait {

    /**
     * Purple color provider.
     *
     * @var PurpleColorProvider
     */
    private $purpleColorProvider;

    /**
     * Get the purple color provider.
     *
     * @return PurpleColorProvider Returns the purple color provider.
     */
    public function getPurpleColorProvider() {
        return $this->purpleColorProvider;
    }

    /**
     * Set the purple color provider.
     *
     * @param PurpleColorProvider|null $purpleColorProvider The purple color provider.
     */
    protected function setPurpleColorProvider(PurpleColorProvider $purpleColorProvider = null) {
        $this->purpleColorProvider = $purpleColorProvider;
        return $this;
    }
}
