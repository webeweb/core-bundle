<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;

/**
 * Abstract command test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractCommandTestCase extends AbstractTestCase {

    /**
     * Input.
     *
     * @var InputInterface
     */
    protected $input;

    /**
     * Output.
     *
     * @var OutputInterface
     */
    protected $output;

    /**
     * Style.
     *
     * @var StyleInterface
     */
    protected $style;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set an Output formatter mock.
        $outputFormatter = $this->getMockBuilder(OutputFormatterInterface::class)->getMock();

        // Set an Input mock.
        $this->input = $this->getMockBuilder(InputInterface::class)->getMock();

        // Set an Output mock.
        $this->output = $this->getMockBuilder(OutputInterface::class)->getMock();
        $this->output->expects($this->any())->method("getFormatter")->willReturn($outputFormatter);

        // Set a Symfony style mock.
        $this->style = $this->getMockBuilder(StyleInterface::class)->getMock();
    }
}
