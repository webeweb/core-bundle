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
 * Float including VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatIncludingVatTotalTrait {

    /**
     * Including VAT total.
     *
     * @var float
     */
    protected $includingVatTotal;

    /**
     * Get the including VAT total.
     *
     * @return float Returns the including VAT total.
     */
    public function getIncludingVatTotal() {
        return $this->includingVatTotal;
    }

    /**
     * Set the including VAT total.
     *
     * @param float $includingVatTotal The including VAT total.
     */
    public function setIncludingVatTotal($includingVatTotal) {
        $this->includingVatTotal = $includingVatTotal;
        return $this;
    }}
