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

use DateTime;

/**
 * Date/time birth date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait DateTimeBirthdateTrait {

    /**
     * Birth date.
     *
     * @var DateTime
     */
    protected $birthdate;

    /**
     * Get the birth date.
     *
     * @return DateTime Returns the birth date.
     */
    public function getBirthdate() {
        return $this->birthdate;
    }

    /**
     * Set the birth date.
     *
     * @param DateTime|null $birthdate The birth date.
     */
    public function setBirthdate(DateTime $birthdate = null) {
        $this->birthdate = $birthdate;
        return $this;
    }
}
