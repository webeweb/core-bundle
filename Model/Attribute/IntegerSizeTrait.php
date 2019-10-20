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
 * Integer size trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerSizeTrait {

    /**
     * Size.
     *
     * @var integer
     */
    private $size;

    /**
     * Get the size.
     *
     * @return integer Returns the size.
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set the size.
     *
     * @param integer $size The size.
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }
}
