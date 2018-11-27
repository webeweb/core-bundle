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
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestAbstractCommand;

/**
 * Abstract command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class AbstractCommandTest extends AbstractFrameworkTestCase {

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
    }

    /**
     * Tests the getCheckbox() method.
     *
     * @return void
     */
    public function testGetCheckbox() {

        $obj = new TestAbstractCommand();

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertEquals("<fg=green;options=bold>\xE2\x9C\x94</>", $obj->getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>!</>", $obj->getCheckbox(false));
        } else {

            $this->assertEquals("<fg=green;options=bold>OK</>", $obj->getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>WARNING</>", $obj->getCheckbox(false));
        }
    }

    /**
     * Tests the newStyle() method.
     *
     * @return void
     */
    public function testNewStyle() {

        $obj = new TestAbstractCommand();

        $res = $obj->newStyle($this->input, $this->output);
        $this->assertNotNull($res);
        $this->assertInstanceOf(StyleInterface::class, $res);
    }

}
