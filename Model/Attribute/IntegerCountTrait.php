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
 * Integer count trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerCountTrait {

    /**
     * Count.
     *
     * @var integer
     */
    private $count;

    /**
     * Get the count.
     *
     * @return integer Returns the count.
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * Set the count.
     *
     * @param integer $count The count.
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }
}
