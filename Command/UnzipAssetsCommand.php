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
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Helper\AssetsHelper;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Unzip assets command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Command
 */
class UnzipAssetsCommand extends AbstractCommand {

    /**
     * Command help.
     *
     * @var string
     */
    const COMMAND_HELP = <<< EOT
The <info>%command.name%</info> command unzips bundle assets into <comment>public</comment>.

    <info>php %command.full_name%</info>

EOT;

    /**
     * {@inheritdoc}
     */
    protected function configure() {
        $this
            ->setName("wbw:core:unzip-assets")
            ->setDescription("Unzip assets under a public directory")
            ->setHelp(self::COMMAND_HELP);
    }

    /**
     * Display the footer.
     *
     * @param StyleInterface $io The I/O.
     * @param int $exitCode The exit code.
     * @param int $count The count.
     * @return void
     */
    protected function displayFooter(StyleInterface $io, $exitCode, $count) {
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
     * Displays the header.
     *
     * @param StyleInterface $io The I/O.
     * @return void
     */
    protected function displayHeader(StyleInterface $io) {
        $io->newLine();
        $io->text("Trying to unzip assets");
        $io->newLine();
    }

    /**
     * Displays the result.
     *
     * @param StyleInterface $io The I/O.
     * @param array $results The results.
     * @return int Returns the exit code.
     */
    protected function displayResult(StyleInterface $io, array $results) {

        // Initialize.
        $success = $this->getCheckbox(true);
        $warning = $this->getCheckbox(false);

        $rows = [];

        $exitCode = 0;

        // Handle each result.
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

        // Display a table.
        $io->table(["", "Bundle", "Asset"], $rows);

        // Return the exit code.
        return $exitCode;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output) {

        // Check the application.
        if (false === ($this->getApplication() instanceof Application)) {
            return -1;
        }

        // Create an I/O and display.
        $io = $this->newStyle($input, $output);
        $this->displayHeader($io);

        // Initialize the results.
        $results = [];

        // Get the bundles.
        $bundles = $this->getApplication()->getKernel()->getBundles();

        // Handle each bundle.
        foreach ($bundles as $current) {

            // Check the bundle.
            if (false === ($current instanceof AssetsProviderInterface)) {
                continue;
            }

            // Get the bundle path.
            $bundlePath = $current->getPath();

            // Initialize the directories.
            $assetsDirectory = $bundlePath . $current->getAssetsRelativeDirectory();
            $publicDirectory = $bundlePath . "/Resources/public";

            // Unzip the assets.
            $results[$current->getName()] = AssetsHelper::unzipAssets($assetsDirectory, $publicDirectory);
        }

        // Display.
        $exitCode = $this->displayResult($io, $results);
        $this->displayFooter($io, $exitCode, count($results));

        // Return.
        return $exitCode;
    }
}
