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
 * Integer type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerTypeTrait {

    /**
     * Type.
     *
     * @var integer
     */
    protected $type;

    /**
     * Get the type.
     *
     * @return integer Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param integer $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
