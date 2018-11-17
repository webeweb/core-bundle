<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Entity;

/**
 * Choice label interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Entity
 */
interface ChoiceLabelInterface {

    /**
     * Get the choice label.
     *
     * @return string Returns the choice label.
     */
    public function getChoiceLabel();
}
