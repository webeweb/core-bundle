<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

/**
 * Color manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
trait ColorManagerTrait {

    /**
     * Color manager.
     *
     * @var ColorManager
     */
    private $colorManager;

    /**
     * Get the color manager.
     *
     * @return ColorManager Returns the color manager.
     */
    public function getColorManager() {
        return $this->colorManager;
    }

    /**
     * Set the color manager.
     *
     * @param ColorManager|null $colorManager The color manager.
     */
    protected function setColorManager(ColorManager $colorManager = null) {
        $this->colorManager = $colorManager;
        return $this;
    }
}
