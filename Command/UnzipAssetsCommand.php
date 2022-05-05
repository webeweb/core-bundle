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

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Console\ConsoleHelper;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Library\Symfony\Helper\AssetsHelper;

/**
 * Unzip assets command.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Command
 */
class UnzipAssetsCommand extends AbstractCommand {

    /**
     * Command name.
     *
     * @var string
     */
    const COMMAND_NAME = "wbw:core:unzip-assets";

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.command.unzip_assets";

    /**
     * {@inheritdoc}
     */
    protected function configure(): void {
        $this
            ->setDescription("Unzip assets under a public directory")
            ->setHelp(ConsoleHelper::formatCommandHelp("unzips bundle assets into <comment>public</comment>"))
            ->setName(self::COMMAND_NAME);
    }

    /**
     * Display the footer.
     *
     * @param StyleInterface $io The I/O.
     * @param int $exitCode The exit code.
     * @param int $count The count.
     * @return void
     */
    protected function displayFooter(StyleInterface $io, int $exitCode, int $count): void {

        if (0 < $exitCode) {
            $io->error("Some errors occurred while unzipping assets");
            return;
        }

        if (0 === $count) {
            $io->success("No assets were provided by any bundle");
            return;
        }

        $io->success("All assets were successfully unzipped");
    }

    /**
     * Displays the result.
     *
     * @param StyleInterface $io The I/O.
     * @param array $results The results.
     * @return int Returns the exit code.
     */
    protected function displayResult(StyleInterface $io, array $results): int {

        $exitCode = 0;

        $rows = [];

        $success = $this->getCheckbox(true);
        $warning = $this->getCheckbox(false);

        foreach ($results as $bundle => $assets) {
            foreach ($assets as $asset => $result) {

                $rows[] = [
                    true === $result ? $success : $warning,
                    $bundle,
                    basename($asset),
                ];

                $exitCode += true === $result ? 0 : 1;
            }
        }

        $io->table(["", "Bundle", "Asset"], $rows);

        return $exitCode;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int {

        $io = $this->newStyle($input, $output);
        $this->displayTitle($io, $this->getDescription());
        $this->displayHeader($io, "Trying to unzip assets");

        $results = [];

        $bundles = $this->getKernel()->getBundles();
        foreach ($bundles as $current) {

            if (false === ($current instanceof AssetsProviderInterface)) {
                continue;
            }

            $bundlePath = $current->getPath();

            $assetsDirectory = $bundlePath . $current->getAssetsRelativeDirectory();
            $publicDirectory = $bundlePath . "/Resources/public";

            $results[$current->getName()] = AssetsHelper::unzipAssets($assetsDirectory, $publicDirectory);
        }

        $exitCode = $this->displayResult($io, $results);
        $this->displayFooter($io, $exitCode, count($results));

        return $exitCode;
    }
}
