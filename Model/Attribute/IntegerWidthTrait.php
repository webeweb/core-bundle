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
 * Integer width trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerWidthTrait {

    /**
     * Width.
     *
     * @var integer
     */
    private $width;

    /**
     * Get the width.
     *
     * @return integer Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set the width.
     *
     * @param integer $width The width.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }
}
