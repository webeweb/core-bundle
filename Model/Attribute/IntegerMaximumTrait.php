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
 * Integer maximum trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerMaximumTrait {

    /**
     * Maximum.
     *
     * @var integer
     */
    private $maximum;

    /**
     * Get the maximum.
     *
     * @return integer Returns the maximum.
     */
    public function getMaximum() {
        return $this->maximum;
    }

    /**
     * Set the maximum.
     *
     * @param integer $maximum The maximum.
     */
    public function setMaximum($maximum) {
        $this->maximum = $maximum;
        return $this;
    }
}
