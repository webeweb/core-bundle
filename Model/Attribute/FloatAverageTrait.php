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
 * Float average trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait FloatAverageTrait {

    /**
     * Average.
     *
     * @var float
     */
    private $average;

    /**
     * Get the average.
     *
     * @return float Returns the average.
     */
    public function getAverage() {
        return $this->average;
    }

    /**
     * Set the average.
     *
     * @param float $average The average.
     */
    public function setAverage($average) {
        $this->average = $average;
        return $this;
    }
}