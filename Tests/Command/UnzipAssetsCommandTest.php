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

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestUnzipAssetsCommand;

/**
 * Unzip assets command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class UnzipAssetsCommandTest extends AbstractTestCase {

    /**
     * Input.
     *
     * @var InputInterface
     */
    private $input;

    /**
     * Output.
     *
     * @var OutputInterface
     */
    private $output;

    /**
     * Style.
     *
     * @var StyleInterface
     */
    private $style;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set an Ouput formatter mock.
        $outputFormatter = $this->getMockBuilder(OutputFormatterInterface::class)->getMock();

        // Set an Input mock.
        $this->input = $this->getMockBuilder(InputInterface::class)->getMock();

        // Set an Output mock.
        $this->output = $this->getMockBuilder(OutputInterface::class)->getMock();
        $this->output->expects($this->any())->method("getFormatter")->willReturn($outputFormatter);

        // Set a Symfony style mock.
        $this->style = $this->getMockBuilder(StyleInterface::class)->getMock();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.core.command.unzip_assets", TestUnzipAssetsCommand::SERVICE_NAME);

        $obj = new TestUnzipAssetsCommand();

        $this->assertEquals("Unzip assets under a public directory", $obj->getDescription());
        $this->assertEquals(TestUnzipAssetsCommand::COMMAND_HELP, $obj->getHelp());
        $this->assertEquals("wbw:core:unzip-assets", $obj->getName());
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooter() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 1));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode0() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 0));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode1() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->style, 1, 0));
    }

    /**
     * Tests the displayHeader() method.
     *
     * @return void
     */
    public function testDisplayHeader() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayHeader($this->style));
    }

    /**
     * Tests the displayResult() method.
     *
     * @return void
     */
    public function testDisplayResult() {

        $obj = new TestUnzipAssetsCommand();

        $arg = [];
        $this->assertEquals(0, $obj->displayResult($this->style, $arg));
    }

    /**
     * Tests the displayResult() method.
     *
     * @return void
     */
    public function testDisplayResultWithExitCode() {

        $obj = new TestUnzipAssetsCommand();

        $arg = [
            "WBWCoreBundle" => [
                "animate.css-3.5.2.zip" => false,
            ],
        ];
        $this->assertEquals(1, $obj->displayResult($this->style, $arg));
    }
}
