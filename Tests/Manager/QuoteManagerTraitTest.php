<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager;

use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestQuoteManagerTrait;

/**
 * Quote manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class QuoteManagerTraitTest extends AbstractTestCase {

    /**
     * Tests the setQuoteManager() method.
     *
     * @return void
     */
    public function testSetQuoteManager(): void {

        // Set a Quote manager mock.
        $quoteManager = new QuoteManager($this->logger);

        $obj = new TestQuoteManagerTrait();

        $obj->setQuoteManager($quoteManager);
        $this->assertSame($quoteManager, $obj->getQuoteManager());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestQuoteManagerTrait();

        $this->assertNull($obj->getQuoteManager());
    }
}
