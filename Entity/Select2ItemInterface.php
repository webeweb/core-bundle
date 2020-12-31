<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Entity;

/**
 * Select2 item interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Entity
 */
interface Select2ItemInterface {

    /**
     * Get a Select2 item "id".
     *
     * @return mixed Returns the Select2 item "id".
     */
    public function getSelect2ItemId();

    /**
     * Get a Select2 item "text".
     *
     * @return string Returns the Select2 item "text".
     */
    public function getSelect2ItemText(): ?string;
}
