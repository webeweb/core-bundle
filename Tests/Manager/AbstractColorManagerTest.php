<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manager;

use Exception;
use WBW\Bundle\CoreBundle\Color\AmberColorProvider;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\TestColorManager;

/**
 * Abstract color manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package Manager
 */
class AbstractColorManagerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testRegisterProvider() {

        // Set a Color provider mock.
        $colorProvider = new AmberColorProvider();

        $obj = new TestColorManager();

        $obj->registerProvider($colorProvider);
        $this->assertSame($colorProvider, $obj->getProviders()[0]);
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testRegisterProviderWithAlreadyRegisteredException() {

        // Set a Color provider mock.
        $colorProvider = new AmberColorProvider();

        $obj = new TestColorManager();

        try {

            $obj->registerProvider($colorProvider);
            $obj->registerProvider($colorProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }
}