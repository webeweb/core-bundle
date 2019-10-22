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
trait StringFirstNameTrait {

    /**
     * First name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * Get the first name.
     *
     * @return string Returns the first name.
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set the first name.
     *
     * @param string $firstName The first name.
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }
}
