<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Exception;
use WBW\Bundle\CoreBundle\Repository\RepositoryHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Repository helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Repository
 */
class RepositoryHelperTest extends AbstractWebTestCase {

    /**
     * Tests readRepositories()
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReadRepositories(): void {

        /** @var RepositoryHelper $obj */
        $obj = static::$kernel->getContainer()->get(RepositoryHelper::SERVICE_NAME);

        $res = $obj->readRepositories();
        $this->assertCount(0, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set an Entity manager mock.
        $entityManager = $this->getMockBuilder(EntityManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.repository.repository_helper", RepositoryHelper::SERVICE_NAME);

        $obj = new RepositoryHelper($entityManager);

        $this->assertSame($entityManager, $obj->getEntityManager());
    }
}
