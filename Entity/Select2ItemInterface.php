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
     * Get a Select2 item "Id".
     *
     * @return mixed Returns the Select2 item "Id".
     */
    public function getSelect2ItemId();

    /**
     * Get a Select2 item "Text".
     *
     * @return string Returns the Select2 item "Text".
     */
    public function getSelect2ItemText();
}
