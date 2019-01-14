<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\DependencyInjection\TestContainerTrait;

/**
 * Container trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection
 */
class ContainerTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestContainerTrait();

        $this->assertNull($obj->getContainer());
    }

    /**
     * Tests the setContainer() method.
     *
     * @return void
     */
    public function testSetContainer() {

        $obj = new TestContainerTrait();

        $obj->setContainer($this->containerBuilder);
        $this->assertSame($this->containerBuilder, $obj->getContainer());
    }
}
