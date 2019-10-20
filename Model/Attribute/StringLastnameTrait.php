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
 * String lastname trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringLastnameTrait {

    /**
     * Lastname.
     *
     * @var string
     */
    private $lastname;

    /**
     * Get the lastName.
     *
     * @return string Returns the lastName.
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set the lastName.
     *
     * @param string $lastname The lastName.
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }
}
