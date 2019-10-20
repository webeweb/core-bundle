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
 * Float quantity trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatQuantityTrait {

    /**
     * Quantity.
     *
     * @var float
     */
    private $quantity;

    /**
     * Get the quantity.
     *
     * @return float Returns the quantity.
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param float $quantity The quantity.
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }
}
