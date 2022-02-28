<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Console;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Component\Console\ConsoleHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Console helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Console
 */
class ConsoleHelperTest extends AbstractTestCase {

    /**
     * Tests getCheckbox()
     *
     * @return void
     */
    public function testGetCheckbox(): void {

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertEquals("<fg=green;options=bold>\xE2\x9C\x94</>", ConsoleHelper::getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>!</>", ConsoleHelper::getCheckbox(false));
        } else {

            $this->assertEquals("<fg=green;options=bold>OK</>", ConsoleHelper::getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>WARNING</>", ConsoleHelper::getCheckbox(false));
        }
    }

    /**
     * Tests newSymfonyStyle()
     *
     * @return void
     */
    public function testNewSymfonyStyle(): void {

        // Set an Output formatter mock.
        $outputFormatter = $this->getMockBuilder(OutputFormatterInterface::class)->getMock();

        // Set an Input mock.
        $input = $this->getMockBuilder(InputInterface::class)->getMock();

        // Set an Output mock.
        $output = $this->getMockBuilder(OutputInterface::class)->getMock();
        $output->expects($this->any())->method("getFormatter")->willReturn($outputFormatter);

        $res = ConsoleHelper::newSymfonyStyle($input, $output);
        $this->assertInstanceOf(StyleInterface::class, $res);
    }
}
