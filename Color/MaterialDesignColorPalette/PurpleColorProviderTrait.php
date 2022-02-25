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
 * Purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
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
     * @return PurpleColorProvider|null Returns the purple color provider.
     */
    public function getPurpleColorProvider(): ?PurpleColorProvider {
        return $this->purpleColorProvider;
    }

    /**
     * Set the purple color provider.
     *
     * @param PurpleColorProvider|null $purpleColorProvider The purple color provider.
     * @return self Returns this instance.
     */
    protected function setPurpleColorProvider(?PurpleColorProvider $purpleColorProvider): self {
        $this->purpleColorProvider = $purpleColorProvider;
        return $this;
    }
}
