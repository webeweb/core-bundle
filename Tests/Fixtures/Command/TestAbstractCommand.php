<?php

/*
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
use Symfony\Component\Console\Style\StyleInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use WBW\Bundle\CoreBundle\Command\AbstractCommand;

/**
 * Test abstract command.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Command
 */
class TestAbstractCommand extends AbstractCommand {

    /**
     * {@inheritdoc}
     */
    protected function configure(): void {
        $this->setName("wbw:core:abstract");
    }

    /**
     * {@inheritdoc}
     */
    public function displayHeader(StyleInterface $io, string $header): void {
        parent::displayHeader($io, $header);
    }

    /**
     * {@inheritdoc}
     */
    public function displayTitle(StyleInterface $io, string $title): void {
        parent::displayTitle($io, $title);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckbox(bool $checked): string {
        return parent::getCheckbox($checked);
    }

    /**
     * {@inheritdoc}
     */
    public function getKernel(): ?KernelInterface {
        return parent::getKernel();
    }

    /**
     * {@inheritdoc}
     */
    public function newStyle(InputInterface $input, OutputInterface $output): StyleInterface {
        return parent::newStyle($input, $output);
    }
}
