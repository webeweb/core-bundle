<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Unzip assets command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class UnzipAssetsCommandWebTest extends AbstractWebTestCase {

    /**
     * Tests the execute() method.
     *
     * @return void
     */
    public function testExecute() {

        // Set an Application mock.
        $application = new Application(static::$kernel);
        $application->add(new UnzipAssetsCommand());

        // Set a Command mock.
        $command = $application->find("wbw:core:unzip-assets");

        // Set a Command tester.
        $commandTester = new CommandTester($command);

        $res = $commandTester->execute([
            "command" => $command->getName(),
        ]);
        $this->assertEquals(0, $res);

        $output = $commandTester->getDisplay();
        $this->assertContains("Trying to unzip assets", $output);
        $this->assertRegexp("/animate\.css\-.*\.zip/", $output);
        $this->assertRegexp("/fontawesome\-.*\.zip/", $output);
        $this->assertRegexp("/jquery\-.*\.zip/", $output);
        $this->assertRegexp("/jquery\-easyautocomplete\-.*\.zip/", $output);
        $this->assertRegexp("/jquery\-inputmask\-.*\.zip/", $output);
        $this->assertRegexp("/jquery\-select2\-.*\.zip/", $output);
        $this->assertRegexp("/material\-design\-color\-palette\-.*\.zip/", $output);
        $this->assertRegexp("/material\-design\-hierarchical\-display\-.*\.zip/", $output);
        $this->assertRegexp("/material\-design\-iconic\-font\-.*\.zip/", $output);
        $this->assertRegexp("/meteocons\.zip/", $output);
        $this->assertRegexp("/sweetalert\-.*\.zip/", $output);
        $this->assertRegexp("/waitme\-.*\.zip/", $output);
        $this->assertContains("[OK] All assets were successfully unzipped", $output);
    }
}
