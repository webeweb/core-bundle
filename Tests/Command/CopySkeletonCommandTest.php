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

use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\HttpKernel\Kernel;
use Throwable;
use WBW\Bundle\CoreBundle\Command\CopySkeletonCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractCommandTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestCopySkeletonCommand;

/**
 * Copy skeleton command test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class CopySkeletonCommandTest extends AbstractCommandTestCase {

    /**
     * Tests displayFooter()
     *
     * @return void
     */
    public function testDisplayFooter(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 1));
    }

    /**
     * Tests displayFooter()
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode0(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 0));
    }

    /**
     * Tests displayFooter()
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode1(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 1, 0));
    }

    /**
     * Tests displayResult()
     *
     * @return void
     */
    public function testDisplayResult(): void {

        $obj = new TestCopySkeletonCommand();

        $arg = [];
        $this->assertEquals(0, $obj->displayResult($this->style, $arg));
    }

    /**
     * Tests displayResult()
     *
     * @return void
     */
    public function testDisplayResultWithExitCode(): void {

        $obj = new TestCopySkeletonCommand();

        $arg = [
            "WBWCoreBundle" => [
                "animate.css-3.5.2.zip" => false,
            ],
        ];
        $this->assertEquals(1, $obj->displayResult($this->style, $arg));
    }

    /**
     * Tests getResourcesDirectory()
     *
     * @return void
     */
    public function testGetResourcesDirectory(): void {

        // Set a getProjectDir() callback.
        $getProjectDir = function(): string {
            return __DIR__ . "/../Fixtures/app";
        };

        // Set the Kernel mock.
        if (5 < Kernel::MAJOR_VERSION) {
            $this->kernel->expects($this->any())->method("getProjectDir")->willReturnCallback($getProjectDir);
        } else {
            $this->kernel->expects($this->any())->method("getRootDir")->willReturnCallback($getProjectDir);
        }

        // Set a Helper set mock.
        $helperSet = $this->getMockBuilder(HelperSet::class)->disableOriginalConstructor()->getMock();

        // Set an Application mock.
        $application = $this->getMockBuilder(Application::class)->disableOriginalConstructor()->getMock();
        $application->expects($this->any())->method("getHelperSet")->willReturn($helperSet);
        $application->expects($this->any())->method("getKernel")->willReturn($this->kernel);

        $obj = new TestCopySkeletonCommand();
        $obj->setApplication($application);

        $this->assertRegExp("/\/templates\/bundles$/", $obj->getResourcesDirectory());
    }

    /**
     * Tests getResourcesDirectory()
     *
     * @return void
     */
    public function testGetResourcesDirectoryWithInvalidArgumentException(): void {

        // Set a Helper set mock.
        $helperSet = $this->getMockBuilder(HelperSet::class)->disableOriginalConstructor()->getMock();

        // Set an Application mock.
        $application = $this->getMockBuilder(Application::class)->disableOriginalConstructor()->getMock();
        $application->expects($this->any())->method("getHelperSet")->willReturn($helperSet);

        $obj = new TestCopySkeletonCommand();
        $obj->setApplication($application);

        try {

            $this->assertRegExp("/\/templates\/bundles$/", $obj->getResourcesDirectory());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The application kernel is null", $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw:core:copy-skeleton", CopySkeletonCommand::COMMAND_NAME);
        $this->assertEquals("wbw.core.command.copy_skeleton", CopySkeletonCommand::SERVICE_NAME);

        $obj = new CopySkeletonCommand();

        $this->assertEquals("Copy skeleton under the app/Resources directory", $obj->getDescription());
        $this->assertNotNull($obj->getHelp());
        $this->assertEquals(CopySkeletonCommand::COMMAND_NAME, $obj->getName());
    }
}
