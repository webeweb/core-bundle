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
 * Integer position trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait IntegerPositionTrait {

    /**
     * Position.
     *
     * @var integer
     */
    protected $position;

    /**
     * Get the position.
     *
     * @return integer Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the position.
     *
     * @param integer $position The position.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }
}
