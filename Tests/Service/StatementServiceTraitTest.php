<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Service\StatementServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestStatementServiceTrait;

/**
 * Statement service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class StatementServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setStatementService()
     *
     * @return void
     */
    public function testSetStatementService(): void {

        // Set a Statement service mock.
        $statementService = $this->getMockBuilder(StatementServiceInterface::class)->getMock();

        $obj = new TestStatementServiceTrait();

        $obj->setStatementService($statementService);
        $this->assertSame($statementService, $obj->getStatementService());
    }
}
