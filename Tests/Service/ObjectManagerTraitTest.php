<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestObjectManagerTrait;

/**
 * Object manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class ObjectManagerTraitTest extends AbstractTestCase {

    /**
     * Tests the setObjectManager() method.
     *
     * @return void
     */
    public function testSetObjectManager(): void {

        $obj = new TestObjectManagerTrait();

        $obj->setObjectManager($this->objectManager);
        $this->assertSame($this->objectManager, $obj->getObjectManager());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestObjectManagerTrait();

        $this->assertNull($obj->getObjectManager());
    }
}
