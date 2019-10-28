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
 * Float VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatVatTotalTrait {

    /**
     *  VAT total.
     *
     * @var float
     */
    protected $vatTotal;

    /**
     * Get the VAT total.
     *
     * @return float Returns the VAT total.
     */
    public function getVatTotal() {
        return $this->vatTotal;
    }

    /**
     * Set the VAT total.
     *
     * @param float $vatTotal The VAT total.
     */
    public function setVatTotal($vatTotal) {
        $this->vatTotal = $vatTotal;
        return $this;
    }
}
