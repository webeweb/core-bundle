<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Helper\CommandHelper;

/**
 * Abstract command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Command
 * @abstract
 */
abstract class AbstractCommand extends Command {

    /**
     * Displays the header.
     *
     * @param StyleInterface $io The I/O.
     * @return void
     */
    protected function displayHeader(StyleInterface $io, $text) {
        $io->newLine();
        $io->text($text);
        $io->newLine();
    }

    /**
     * Get the application.
     *
     * @return Application|null Returns the application.
     */
    public function getApplication() {
        return parent::getApplication();
    }

    /**
     * Get a checkbox.
     *
     * @param bool $checked Checked ?
     * @return string Returns the checkbox.
     */
    protected function getCheckbox($checked) {
        return CommandHelper::getCheckbox($checked);
    }

    /**
     * Create a style.
     *
     * @param InputInterface $input The input.
     * @param OutputInterface $output The output.
     * @return StyleInterface Returns the style.
     */
    protected function newStyle(InputInterface $input, OutputInterface $output) {
        return CommandHelper::newSymfonyStyle($input, $output);
    }
}
