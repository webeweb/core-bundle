<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

/**
 * Quote manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
trait QuoteManagerTrait {

    /**
     * Quote manager.
     *
     * @var QuoteManager
     */
    private $quoteManager;

    /**
     * Get the quote manager.
     *
     * @return QuoteManager Returns the quote manager.
     */
    public function getQuoteManager() {
        return $this->quoteManager;
    }

    /**
     * Set the quote manager.
     *
     * @param QuoteManager|null $quoteManager The quote manager.
     */
    protected function setQuoteManager(QuoteManager $quoteManager = null) {
        $this->quoteManager = $quoteManager;
        return $this;
    }
}