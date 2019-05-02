<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

use WBW\Bundle\CoreBundle\Quote\QuoteInterface;

/**
 * Quote provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface QuoteProviderInterface extends ProviderInterface {

    /**
     * Tag name.
     *
     * @var string
     */
    const TAG_NAME = "webeweb.core.provider.quote";

    /**
     * Get the authors.
     *
     * @return string[] Returns the authors.
     */
    public function getAuthors();

    /**
     * Get the domain.
     *
     * @return string Returns the domain.
     */
    public function getDomain();

    /**
     * Get the quotes.
     *
     * @return QuoteInterface[] Returns the quotes.
     */
    public function getQuotes();

    /**
     * Initializes.
     *
     * @return void
     */
    public function init();
}
