<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Psr\Log;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Psr\Log\TestLoggerTrait;

/**
 * Logger trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Psr\Log
 */
class LoggerTraitTest extends AbstractTestCase {

    /**
     * Tests setLogger()
     *
     * @return void
     */
    public function testSetLogger(): void {

        $obj = new TestLoggerTrait();

        $obj->setLogger($this->logger);
        $this->assertSame($this->logger, $obj->getLogger());
    }
}
