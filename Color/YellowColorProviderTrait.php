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
 * Yellow color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 * @deprecated since Core bundle 1.8, use {@see WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\YellowColorProviderTrait} instead.
 */
trait YellowColorProviderTrait {

    /**
     * Yellow color provider.
     *
     * @var YellowColorProvider
     */
    private $yellowColorProvider;

    /**
     * Get the yellow color provider.
     *
     * @return YellowColorProvider Returns the yellow color provider.
     */
    public function getYellowColorProvider() {
        return $this->yellowColorProvider;
    }

    /**
     * Set the yellow color provider.
     *
     * @param YellowColorProvider|null $yellowColorProvider The yellow color provider.
     */
    protected function setYellowColorProvider(YellowColorProvider $yellowColorProvider = null) {
        $this->yellowColorProvider = $yellowColorProvider;
        return $this;
    }
}
