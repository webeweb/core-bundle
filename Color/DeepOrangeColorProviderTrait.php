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
 * Deep orange color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait DeepOrangeColorProviderTrait {

    /**
     * Deep orange color provider.
     *
     * @var DeepOrangeColorProvider
     */
    private $deepOrangeColorProvider;

    /**
     * Get the deep orange color provider.
     *
     * @return DeepOrangeColorProvider Returns the deep orange color provider.
     */
    public function getDeepOrangeColorProvider() {
        return $this->deepOrangeColorProvider;
    }

    /**
     * Set the deep orange color provider.
     *
     * @param DeepOrangeColorProvider|null $deepOrangeColorProvider The deep orange color provider.
     */
    protected function setDeepOrangeColorProvider(DeepOrangeColorProvider $deepOrangeColorProvider = null) {
        $this->deepOrangeColorProvider = $deepOrangeColorProvider;
        return $this;
    }
}
