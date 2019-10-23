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
trait DateTimeBirthDateTrait {

    /**
     * Birth date.
     *
     * @var DateTime
     */
    protected $birthDate;

    /**
     * Get the birth date.
     *
     * @return DateTime Returns the birth date.
     */
    public function getBirthDate() {
        return $this->birthDate;
    }

    /**
     * Set the birth date.
     *
     * @param DateTime|null $birthDate The birth date.
     */
    public function setBirthDate(DateTime $birthDate = null) {
        $this->birthDate = $birthDate;
        return $this;
    }
}
