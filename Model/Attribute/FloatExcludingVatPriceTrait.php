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
 * Float excluding VAT price trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatExcludingVatPriceTrait {

    /**
     * Excluding VAT price.
     *
     * @var float
     */
    private $excludingVatPrice;

    /**
     * Get the excluding VAT price.
     *
     * @return float Returns the excluding VAT price.
     */
    public function getExcludingVatPrice() {
        return $this->excludingVatPrice;
    }

    /**
     * Set the excluding VAT price.
     *
     * @param float $excludingVatPrice The excluding VAT price.
     */
    public function setExcludingVatPrice($excludingVatPrice) {
        $this->excludingVatPrice = $excludingVatPrice;
        return $this;
    }}
