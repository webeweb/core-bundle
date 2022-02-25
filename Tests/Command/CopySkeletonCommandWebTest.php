<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use WBW\Bundle\CoreBundle\Command\CopySkeletonCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Copy skeleton command test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class CopySkeletonCommandWebTest extends AbstractWebTestCase {

    /**
     * Tests execute()
     *
     * @return void
     */
    public function testExecute(): void {

        // Set an Application mock.
        $application = new Application(static::$kernel);
        $application->add(new CopySkeletonCommand());

        // Set a Command mock.
        $command = $application->find("wbw:core:copy-skeleton");

        // Set a Command tester.
        $commandTester = new CommandTester($command);

        $res = $commandTester->execute([
            "command" => $command->getName(),
        ]);
        $this->assertEquals(0, $res);

        $output = $commandTester->getDisplay();
        $this->assertStringContainsString("Trying to copy skeletons", $output);
        $this->assertStringContainsString("[OK] No skeleton were provided by any bundle", $output);
    }
}
