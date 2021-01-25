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
 * Yellow color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
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
     * @return YellowColorProvider|null Returns the yellow color provider.
     */
    public function getYellowColorProvider(): ?YellowColorProvider {
        return $this->yellowColorProvider;
    }

    /**
     * Set the yellow color provider.
     *
     * @param YellowColorProvider|null $yellowColorProvider The yellow color provider.
     * @return self Returns this instance.
     */
    protected function setYellowColorProvider(?YellowColorProvider $yellowColorProvider): self {
        $this->yellowColorProvider = $yellowColorProvider;
        return $this;
    }
}
