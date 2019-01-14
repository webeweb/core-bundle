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

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
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
     * @param OutputInterface $output The ouptut.
     * @return StyleInterface Returns the style.
     */
    protected function newStyle(InputInterface $input, OutputInterface $output) {
        return new SymfonyStyle($input, $output);
    }
}
