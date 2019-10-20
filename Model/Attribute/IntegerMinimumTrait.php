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
 * Integer minimum trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerMinimumTrait {

    /**
     * Minimum.
     *
     * @var integer
     */
    private $minimum;

    /**
     * Get the minimum.
     *
     * @return integer Returns the minimum.
     */
    public function getMinimum() {
        return $this->minimum;
    }

    /**
     * Set the minimum.
     *
     * @param integer $minimum The minimum.
     */
    public function setMinimum($minimum) {
        $this->minimum = $minimum;
        return $this;
    }
}
