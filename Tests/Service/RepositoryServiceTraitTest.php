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

use WBW\Bundle\CoreBundle\Service\RepositoryServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestRepositoryServiceTrait;

/**
 * Repository service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class RepositoryServiceTraitTest extends AbstractTestCase {

    /**
     * Test setRepositoryService()
     *
     * @return void
     */
    public function testSetRepositoryService(): void {

        // Set a Repository service mock.
        $repositoryService = $this->getMockBuilder(RepositoryServiceInterface::class)->getMock();

        $obj = new TestRepositoryServiceTrait();

        $obj->setRepositoryService($repositoryService);
        $this->assertSame($repositoryService, $obj->getRepositoryService());
    }
}
