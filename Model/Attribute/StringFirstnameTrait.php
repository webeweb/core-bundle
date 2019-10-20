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
 * String firstname trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringFirstnameTrait {

    /**
     * Firstname.
     *
     * @var string
     */
    private $firstname;

    /**
     * Get the firstname.
     *
     * @return string Returns the firstname.
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }
}
