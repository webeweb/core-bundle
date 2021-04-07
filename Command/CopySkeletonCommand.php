<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Command;

use InvalidArgumentException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use Symfony\Component\HttpKernel\Kernel;
use WBW\Bundle\CoreBundle\Component\HttpKernel\KernelHelper;
use WBW\Bundle\CoreBundle\Helper\SkeletonHelper;
use WBW\Bundle\CoreBundle\Provider\SkeletonProviderInterface;

/**
 * Copy skeleton command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Command\Command
 */
class CopySkeletonCommand extends AbstractCommand {

    /**
     * Command help.
     *
     * @var string
     */
    const COMMAND_HELP = <<< EOT
The <info>%command.name%</info> command copy bundle skeleton into <comment>app/Resources</comment>.

    <info>php %command.full_name%</info>

EOT;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.command.copy_skeleton";

    /**
     * {@inheritDoc}
     */
    protected function configure(): void {
        $this
            ->setName("wbw:core:copy-skeleton")
            ->setDescription("Copy skeleton under the app/Resources directory")
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
    protected function displayFooter(StyleInterface $io, int $exitCode, int $count): void {
        if (0 < $exitCode) {
            $io->error("Some errors occurred while copying skeletons");
            return;
        }
        if (0 === $count) {
            $io->success("No skeleton were provided by any bundle");
            return;
        }
        $io->success("All skeletons were successfully copied");
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
        $io->table(["", "Bundle", "Resource"], $rows);

        return $exitCode;
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int {

        $io = $this->newStyle($input, $output);
        $this->displayTitle($io, $this->getDescription());
        $this->displayHeader($io, "Trying to copy skeletons");

        $results = [];

        $bundles = $this->getKernel()->getBundles();
        foreach ($bundles as $current) {

            if (false === ($current instanceof SkeletonProviderInterface)) {
                continue;
            }

            $bundlePath = $current->getPath();

            $skeletonDirectory  = $bundlePath . $current->getSkeletonRelativeDirectory();
            $resourcesDirectory = $this->getResourcesDirectory();

            $results[$current->getName()] = SkeletonHelper::copySkeleton($skeletonDirectory, $resourcesDirectory);
        }

        $exitCode = $this->displayResult($io, $results);
        $this->displayFooter($io, $exitCode, count($results));

        return $exitCode;
    }

    /**
     * Get the resources directory.
     *
     * @return string Returns the resources directory.
     * @throws InvalidArgumentException Throws an invalid argument exception is the kernel is null.
     */
    protected function getResourcesDirectory(): string {

        $kernel = $this->getKernel();
        if (null === $kernel) {
            throw new InvalidArgumentException("The application kernel is null");
        }

        $rootDir = KernelHelper::getProjectDir($kernel);

        if (40000 <= Kernel::VERSION_ID) {
            return $rootDir . "/templates/bundles";
        }

        return $rootDir . "/app/Resources";
    }
}
