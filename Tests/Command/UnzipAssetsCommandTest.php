<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Command;

use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Unzip assets command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class UnzipAssetsCommandTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new UnzipAssetsCommand();

        $this->assertEquals("Unzip assets under a public directory", $obj->getDescription());
        $this->assertEquals("", $obj->getHelp());
        $this->assertEquals("wbw:core:unzip-assets", $obj->getName());
    }

}
