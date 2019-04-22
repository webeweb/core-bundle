<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Quote;

use DateTime;

/**
 * Quote interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Quote
 */
interface QuoteInterface {

    /**
     * Get the author.
     *
     * @return string Returns the author.
     */
    public function getAuthor();

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate();
}
