<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * Float rate trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatRateTrait {

    /**
     * Rate.
     *
     * @var float
     */
    private $rate;

    /**
     * Get the rate.
     *
     * @return float Returns the rate.
     */
    public function getRate() {
        return $this->rate;
    }

    /**
     * Set the rate.
     *
     * @param float $rate The rate.
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }
}
