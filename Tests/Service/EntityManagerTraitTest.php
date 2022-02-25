<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestEntityManagerTrait;

/**
 * Entity manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class EntityManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setEntityManager()
     *
     * @return void
     */
    public function testSetEntityManager(): void {

        $obj = new TestEntityManagerTrait();

        $obj->setEntityManager($this->entityManager);
        $this->assertSame($this->entityManager, $obj->getEntityManager());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestEntityManagerTrait();

        $this->assertNull($obj->getEntityManager());
    }
}
