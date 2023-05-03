<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WBW\Library\System\Helper\SystemHelper;

/**
 * Console helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Console
 */
class ConsoleHelper {

    /**
     * Format a command help.
     *
     * @param string $content The content
     * @return string
     */
    public static function formatCommandHelp(string $content): string {

        $template = <<< EOT
The <info>%command.name%</info> command {{ content }}.

    <info>php %command.full_name%</info>


EOT;

        return str_replace("{{ content }}", $content, $template);
    }

    /**
     * Get a checkbox.
     *
     * @param bool|null $checked Checked ?
     * @return string Returns the checkbox.
     */
    public static function getCheckbox(?bool $checked): string {

        if (true === $checked) {
            return sprintf("<fg=green;options=bold>%s</>", SystemHelper::isWindows() ? "OK" : "\xE2\x9C\x94");
        }

        return sprintf("<fg=yellow;options=bold>%s</>", SystemHelper::isWindows() ? "KO" : "!");
    }

    /**
     * Create a Symfony style.
     *
     * @param InputInterface $input The input.
     * @param OutputInterface $output The output.
     * @return StyleInterface Returns the Symfony style.
     */
    public static function newSymfonyStyle(InputInterface $input, OutputInterface $output): StyleInterface {
        return new SymfonyStyle($input, $output);
    }
}
