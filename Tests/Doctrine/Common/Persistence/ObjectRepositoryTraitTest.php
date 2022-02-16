<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Doctrine\Common\Persistence;

use Doctrine\Common\Persistence\ObjectRepository;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Doctrine\Common\Persistence\TestObjectRepositoryTrait;

/**
 * Object repository trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class ObjectRepositoryTraitTest extends AbstractTestCase {

    /**
     * Tests setObjectRepository()
     *
     * @return void
     */
    public function testSetObjectRepository(): void {

        // Set an Object repository mock.
        $objectRepository = $this->getMockBuilder(ObjectRepository::class)->getMock();

        $obj = new TestObjectRepositoryTrait();

        $obj->setObjectRepository($objectRepository);
        $this->assertSame($objectRepository, $obj->getObjectRepository());
    }
}
