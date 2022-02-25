<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager\Asset;

use WBW\Bundle\CoreBundle\Manager\Asset\QuoteManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset\TestQuoteManagerTrait;

/**
 * Quote manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
 */
class QuoteManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setQuoteManager()
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
}
