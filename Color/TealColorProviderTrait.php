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
 * Teal color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 */
trait TealColorProviderTrait {

    /**
     * Teal color provider.
     *
     * @var TealColorProvider
     */
    private $tealColorProvider;

    /**
     * Get the teal color provider.
     *
     * @return TealColorProvider Returns the teal color provider.
     */
    public function getTealColorProvider() {
        return $this->tealColorProvider;
    }

    /**
     * Set the teal color provider.
     *
     * @param TealColorProvider $tealColorProvider The teal color provider.
     */
    protected function setTealColorProvider(TealColorProvider $tealColorProvider = null) {
        $this->tealColorProvider = $tealColorProvider;
        return $this;
    }

}
