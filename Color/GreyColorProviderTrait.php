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
 * Grey color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait GreyColorProviderTrait {

    /**
     * Grey color provider.
     *
     * @var GreyColorProvider
     */
    private $greyColorProvider;

    /**
     * Get the grey color provider.
     *
     * @return GreyColorProvider Returns the grey color provider.
     */
    public function getGreyColorProvider() {
        return $this->greyColorProvider;
    }

    /**
     * Set the grey color provider.
     *
     * @param GreyColorProvider $greyColorProvider The grey color provider.
     */
    protected function setGreyColorProvider(GreyColorProvider $greyColorProvider = null) {
        $this->greyColorProvider = $greyColorProvider;
        return $this;
    }

}