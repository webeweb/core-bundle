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
use Symfony\Component\HttpKernel\KernelInterface;
use WBW\Bundle\CoreBundle\Helper\CommandHelper;

/**
 * Abstract command.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Command
 * @abstract
 */
abstract class AbstractCommand extends Command {

    /**
     * Displays the header.
     *
     * @param StyleInterface $io The I/O.
     * @param string $header The header.
     * @return void
     */
    protected function displayHeader(StyleInterface $io, string $header): void {
        $io->text($header);
        $io->newLine();
    }

    /**
     * Displays the title.
     *
     * @param StyleInterface $io The I/O.
     * @param string $title The title.
     * @return void
     */
    protected function displayTitle(StyleInterface $io, string $title): void {
        $io->title($title);
    }

    /**
     * Get a checkbox.
     *
     * @param bool $checked Checked ?
     * @return string Returns the checkbox.
     */
    protected function getCheckbox(bool $checked): string {
        return CommandHelper::getCheckbox($checked);
    }

    /**
     * Get the kernel.
     *
     * @return KernelInterface|null Returns the kernel in case of success, null othrewise.
     */
    protected function getKernel(): ?KernelInterface {
        if (false === ($this->getApplication() instanceof Application)) {
            return null;
        }
        return $this->getApplication()->getKernel();
    }

    /**
     * Create a style.
     *
     * @param InputInterface $input The input.
     * @param OutputInterface $output The output.
     * @return StyleInterface Returns the style.
     */
    protected function newStyle(InputInterface $input, OutputInterface $output): StyleInterface {
        return CommandHelper::newSymfonyStyle($input, $output);
    }
}
