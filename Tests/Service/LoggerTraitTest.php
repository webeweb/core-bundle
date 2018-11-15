<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestLoggerTrait;

/**
 * Logger trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class LoggerTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestLoggerTrait();

        $this->assertNull($obj->getLogger());
    }

    /**
     * Tests the setLogger() method.
     *
     * @return void
     */
    public function testSetLogger() {

        $obj = new TestLoggerTrait();

        $obj->setLogger($this->logger);
        $this->assertSame($this->logger, $obj->getLogger());
    }

}
