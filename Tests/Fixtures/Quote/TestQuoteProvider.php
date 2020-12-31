<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Quote;

use WBW\Bundle\CoreBundle\Quote\AbstractQuoteProvider;

/**
 * Test quote provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Quote
 */
class TestQuoteProvider extends AbstractQuoteProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function getDomain(): string {
        return "test";
    }

    /**
     * {@inheritDoc}
     */
    public function init(): void {
        // NOTHING TO DO
    }
}
