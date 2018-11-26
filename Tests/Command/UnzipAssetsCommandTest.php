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

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpKernel\Kernel;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestUnzipAssetsCommand;

/**
 * Unzip assets command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class UnzipAssetsCommandTest extends AbstractFrameworkTestCase {

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
     * SYmfony style.
     *
     * @var SymfonyStyle
     */
    private $symfonyStyle;

    /**
     * {@inheritdoc}
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
        if (20700 < Kernel::VERSION_ID) {
            $this->symfonyStyle = $this->getMockBuilder(SymfonyStyle::class)->setConstructorArgs([$this->input, $this->output])->getMock();
        } else {
            $this->symfonyStyle = $this->getMockBuilder(SymfonyStyle::class)->getMock();
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

        $this->assertNull($obj->displayFooter($this->symfonyStyle, 0, 1));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode0() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->symfonyStyle, 0, 0));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode1() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayFooter($this->symfonyStyle, 1, 0));
    }

    /**
     * Tests the displayHeader() method.
     *
     * @return void
     */
    public function testDisplayHeader() {

        $obj = new TestUnzipAssetsCommand();

        $this->assertNull($obj->displayHeader($this->symfonyStyle));
    }

    /**
     * Tests the displayResult() method.
     *
     * @return void
     */
    public function testDisplayResult() {

        $obj = new TestUnzipAssetsCommand();

        $arg = [];
        $this->assertEquals(0, $obj->displayResult($this->symfonyStyle, $arg));
    }

    /**
     * Tests the displayResult() method.
     *
     * @return void
     */
    public function testDisplayResultWithExitCode() {

        $obj = new TestUnzipAssetsCommand();

        $arg = [
            "CoreBundle" => [
                "animate.css-3.5.2.zip" => false,
            ],
        ];
        $this->assertEquals(1, $obj->displayResult($this->symfonyStyle, $arg));
    }

    /**
     * Tests the newSymfonyStyle() method.
     *
     * @return void
     */
    public function testNewSymfonyStyle() {

        $obj = new TestUnzipAssetsCommand();

        $res = $obj->newSymfonyStyle($this->input, $this->output);
        $this->assertNotNull($res);
        $this->assertInstanceOf(SymfonyStyle::class, $res);
    }

}
