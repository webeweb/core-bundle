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
 * String last name trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringLastNameTrait {

    /**
     * Last name.
     *
     * @var string
     */
    private $lastName;

    /**
     * Get the last name.
     *
     * @return string Returns the last name.
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set the last name.
     *
     * @param string $last name The last name.
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
}
