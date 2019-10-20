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
 * Float excluding VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatExcludingVatTotalTrait {

    /**
     * Excluding VAT total.
     *
     * @var float
     */
    private $excludingVatTotal;

    /**
     * Get the excluding VAT total.
     *
     * @return float Returns the excluding VAT total.
     */
    public function getExcludingVatTotal() {
        return $this->excludingVatTotal;
    }

    /**
     * Set the excluding VAT total.
     *
     * @param float $excludingVatTotal The excluding VAT total.
     */
    public function setExcludingVatTotal($excludingVatTotal) {
        $this->excludingVatTotal = $excludingVatTotal;
        return $this;
    }}
