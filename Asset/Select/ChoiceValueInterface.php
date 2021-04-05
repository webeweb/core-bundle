<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Select;

/**
 * Choice value interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Select
 */
interface ChoiceValueInterface {

    /**
     * Get the choice value.
     *
     * @return string|null Returns the choice value.
     */
    public function getChoiceValue(): ?string;
}
