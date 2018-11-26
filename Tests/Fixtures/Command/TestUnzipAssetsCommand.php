<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;

/**
 * Test unzip assets command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Command
 */
class TestUnzipAssetsCommand extends UnzipAssetsCommand {

    /**
     * {@inheritdoc}
     */
    public function displayFooter(SymfonyStyle $io, $exitCode, $count) {
        return parent::displayFooter($io, $exitCode, $count);
    }

    /**
     * {@inheritdoc}
     */
    public function displayHeader(SymfonyStyle $io) {
        return parent::displayHeader($io);
    }

    /**
     * {@inheritdoc}
     */
    public function displayResult(SymfonyStyle $io, array $results) {
        return parent::displayResult($io, $results);
    }

    /**
     * {@inheritdoc}
     */
    public function newSymfonyStyle(InputInterface $input, OutputInterface $output) {
        return parent::newSymfonyStyle($input, $output);
    }

}