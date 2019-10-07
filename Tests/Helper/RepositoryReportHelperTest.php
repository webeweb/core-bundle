<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Exception;
use WBW\Bundle\CoreBundle\Helper\RepositoryReportHelper;
use WBW\Bundle\CoreBundle\Model\RepositoryReport;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Entity\TestUser;

/**
 * Repository report helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class RepositoryReportHelperTest extends AbstractWebTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        // Set an Entity manager mock.
        $entityManager = $this->getMockBuilder(EntityManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.helper.repository_report", RepositoryReportHelper::SERVICE_NAME);

        $obj = new RepositoryReportHelper($entityManager);

        $this->assertSame($entityManager, $obj->getEntityManager());
    }

    /**
     * Tests the readRepositories() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReadRepositories() {

        /** @var RepositoryReportHelper $obj */
        $obj = static::$kernel->getContainer()->get(RepositoryReportHelper::SERVICE_NAME);

        $res = $obj->readRepositories();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(RepositoryReport::class, $res[0]);
        $this->assertEquals(180, $res[0]->getAvailable());
        $this->assertEquals(17, $res[0]->getAverage());
        $this->assertEquals("confirmation_token", $res[0]->getColumn());
        $this->assertEquals(1, $res[0]->getCount());
        $this->assertEquals(TestUser::class, $res[0]->getEntity());
        $this->assertEquals("confirmationToken", $res[0]->getField());
        $this->assertEquals(17, $res[0]->getMinimum());
        $this->assertEquals(17, $res[0]->getMaximum());
        $this->assertEquals("fos_user", $res[0]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[1]);
        $this->assertEquals(180, $res[1]->getAvailable());
        $this->assertEquals(18, $res[1]->getAverage());
        $this->assertEquals("email", $res[1]->getColumn());
        $this->assertEquals(1, $res[1]->getCount());
        $this->assertEquals(TestUser::class, $res[1]->getEntity());
        $this->assertEquals("email", $res[1]->getField());
        $this->assertEquals(18, $res[1]->getMinimum());
        $this->assertEquals(18, $res[1]->getMaximum());
        $this->assertEquals("fos_user", $res[1]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[2]);
        $this->assertEquals(180, $res[2]->getAvailable());
        $this->assertEquals(18, $res[2]->getAverage());
        $this->assertEquals("email_canonical", $res[2]->getColumn());
        $this->assertEquals(1, $res[2]->getCount());
        $this->assertEquals(TestUser::class, $res[2]->getEntity());
        $this->assertEquals("emailCanonical", $res[2]->getField());
        $this->assertEquals(18, $res[2]->getMinimum());
        $this->assertEquals(18, $res[2]->getMaximum());
        $this->assertEquals("fos_user", $res[2]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[3]);
        $this->assertEquals(-1, $res[3]->getAvailable());
        $this->assertEquals(88, $res[3]->getAverage());
        $this->assertEquals("password", $res[3]->getColumn());
        $this->assertEquals(1, $res[3]->getCount());
        $this->assertEquals(TestUser::class, $res[3]->getEntity());
        $this->assertEquals("password", $res[3]->getField());
        $this->assertEquals(88, $res[3]->getMinimum());
        $this->assertEquals(88, $res[3]->getMaximum());
        $this->assertEquals("fos_user", $res[3]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[4]);
        $this->assertEquals(-1, $res[4]->getAvailable());
        $this->assertEquals(43, $res[4]->getAverage());
        $this->assertEquals("salt", $res[4]->getColumn());
        $this->assertEquals(1, $res[4]->getCount());
        $this->assertEquals(TestUser::class, $res[4]->getEntity());
        $this->assertEquals("salt", $res[4]->getField());
        $this->assertEquals(43, $res[4]->getMinimum());
        $this->assertEquals(43, $res[4]->getMaximum());
        $this->assertEquals("fos_user", $res[4]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[5]);
        $this->assertEquals(180, $res[5]->getAvailable());
        $this->assertEquals(7, $res[5]->getAverage());
        $this->assertEquals("username", $res[5]->getColumn());
        $this->assertEquals(1, $res[5]->getCount());
        $this->assertEquals(TestUser::class, $res[5]->getEntity());
        $this->assertEquals("username", $res[5]->getField());
        $this->assertEquals(7, $res[5]->getMinimum());
        $this->assertEquals(7, $res[5]->getMaximum());
        $this->assertEquals("fos_user", $res[5]->getTable());

        $this->assertInstanceOf(RepositoryReport::class, $res[6]);
        $this->assertEquals(180, $res[6]->getAvailable());
        $this->assertEquals("username_canonical", $res[6]->getColumn());
        $this->assertEquals(1, $res[6]->getCount());
        $this->assertEquals(TestUser::class, $res[6]->getEntity());
        $this->assertEquals("usernameCanonical", $res[6]->getField());
        $this->assertEquals(7, $res[6]->getAverage());
        $this->assertEquals(7, $res[6]->getMinimum());
        $this->assertEquals(7, $res[6]->getMaximum());
        $this->assertEquals("fos_user", $res[6]->getTable());
    }
}
