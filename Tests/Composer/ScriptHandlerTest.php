<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Composer;

use Composer\Composer;
use Composer\Installer\InstallationManager;
use Composer\Package\PackageInterface;
use Composer\Script\PackageEvent;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Composer\TestScriptHandler;

/**
 * Script handler test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Composer
 */
class ScriptHandlerTest extends AbstractFrameworkTestCase {

    /**
     * Directory "assets".
     *
     * @var string
     */
    private $directoryAssets;

    /**
     * Directory "public".
     *
     * @var string
     */
    private $directoryPublic;

    /**
     * Event.
     *
     * @var PackageEvent
     */
    private $event;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets = getcwd() . "/Resources/assets";
        $this->directoryPublic = getcwd() . "/Resources/public";

        // Set a Package mock.
        $package = $this->getMockBuilder(PackageInterface::class)->getMock();
        $package->expects($this->any())->method("getName")->willReturn("webeweb/core-bundle");

        // Set an Installation manager mock.
        $installationManager = $this->getMockBuilder(InstallationManager::class)->getMock();
        $installationManager->expects($this->any())->method("getInstallPath")->willReturnCallback(function (PackageInterface $package) {
            return getcwd() . "/vendor/" . $package->getName();
        });

        // Set a Composer mock.
        $composer = $this->getMockBuilder(Composer::class)->getMock();
        $composer->expects($this->any())->method("getInstallationManager")->willReturn($installationManager);
        $composer->expects($this->any())->method("getPackage")->willReturn($package);

        // Set an Event mock.
        $this->event = $this->getMockBuilder(PackageEvent::class)->disableOriginalConstructor()->getMock();
        $this->event->expects($this->any())->method("getComposer")->willReturn($composer);
    }

    /**
     * Tests the getInstallPath() method.
     *
     * @return void
     */
    public function testGetInstallPath() {

        $res = TestScriptHandler::getInstallPath($this->event);
        $this->assertEquals(getcwd(), $res);
    }

    /**
     * Tests the unzipAssets() method.
     *
     * @return void
     */
    public function testUnzipAssets() {

        $res = TestScriptHandler::unzipAssets($this->event);
        $this->assertNotEmpty($res);
    }

}
