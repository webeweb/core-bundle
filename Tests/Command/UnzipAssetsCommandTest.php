<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Command;

use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractCommandTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestUnzipAssetsCommand;

/**
 * Unzip assets command test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class UnzipAssetsCommandTest extends AbstractCommandTestCase {

    /**
     * Test displayFooter()
     *
     * @return void
     */
    public function testDisplayFooter(): void {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 1));
    }

    /**
     * Test displayFooter()
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode0(): void {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 0));
    }

    /**
     * Test displayFooter()
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode1(): void {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 1, 0));
    }

    /**
     * Test displayResult()
     *
     * @return void
     */
    public function testDisplayResult(): void {

        $obj = new TestUnzipAssetsCommand();

        $arg = [];
        $this->assertEquals(0, $obj->displayResult($this->style, $arg));
    }

    /**
     * Test displayResult()
     *
     * @return void
     */
    public function testDisplayResultWithExitCode(): void {

        $obj = new TestUnzipAssetsCommand();

        $arg = [
            "WBWCoreBundle" => [
                "animate.css-3.5.2.zip" => false,
            ],
        ];
        $this->assertEquals(1, $obj->displayResult($this->style, $arg));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw:core:unzip-assets", UnzipAssetsCommand::COMMAND_NAME);
        $this->assertEquals("wbw.core.command.unzip_assets", UnzipAssetsCommand::SERVICE_NAME);

        $obj = new UnzipAssetsCommand();

        $this->assertEquals("Unzip assets under a public directory", $obj->getDescription());
        $this->assertNotNull($obj->getHelp());
        $this->assertEquals(UnzipAssetsCommand::COMMAND_NAME, $obj->getName());
    }
}
