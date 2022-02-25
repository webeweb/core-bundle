<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager\Asset;

/**
 * Color manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Manager\Asset
 */
trait ColorManagerTrait {

    /**
     * Color manager.
     *
     * @var ColorManager|null
     */
    private $colorManager;

    /**
     * Get the color manager.
     *
     * @return ColorManager|null Returns the color manager.
     */
    public function getColorManager(): ?ColorManager {
        return $this->colorManager;
    }

    /**
     * Set the color manager.
     *
     * @param ColorManager|null $colorManager The color manager.
     * @return self Returns this instance.
     */
    protected function setColorManager(?ColorManager $colorManager): self {
        $this->colorManager = $colorManager;
        return $this;
    }
}
