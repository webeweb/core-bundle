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
 * Deep purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait DeepPurpleColorProviderTrait {

    /**
     * Deep purple color provider.
     *
     * @var DeepPurpleColorProvider
     */
    private $deepPurpleColorProvider;

    /**
     * Get the deep purple color provider.
     *
     * @return DeepPurpleColorProvider Returns the deep purple color provider.
     */
    public function getDeepPurpleColorProvider() {
        return $this->deepPurpleColorProvider;
    }

    /**
     * Set the deep purple color provider.
     *
     * @param DeepPurpleColorProvider|null $deepPurpleColorProvider The deep purple color provider.
     */
    protected function setDeepPurpleColorProvider(DeepPurpleColorProvider $deepPurpleColorProvider = null) {
        $this->deepPurpleColorProvider = $deepPurpleColorProvider;
        return $this;
    }
}
