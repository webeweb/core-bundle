<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Doctrine\ORM;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Doctrine\ORM\TestEntityManagerTrait;

/**
 * Entity manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Doctrine\ORM
 */
class EntityManagerTraitTest extends AbstractTestCase {

    /**
     * Tests the setEntityManager() method.
     *
     * @return void
     */
    public function testSetEntityManager(): void {

        $obj = new TestEntityManagerTrait();

        $obj->setEntityManager($this->entityManager);
        $this->assertSame($this->entityManager, $obj->getEntityManager());
    }
}
