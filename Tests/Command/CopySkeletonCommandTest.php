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

use Exception;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\HttpKernel\Kernel;
use WBW\Bundle\CoreBundle\Command\CopySkeletonCommand;
use WBW\Bundle\CoreBundle\Tests\AbstractCommandTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestCopySkeletonCommand;

/**
 * Copy skeleton command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class CopySkeletonCommandTest extends AbstractCommandTestCase {

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooter(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 1));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode0(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 0, 0));
    }

    /**
     * Tests the displayFooter() method.
     *
     * @return void
     */
    public function testDisplayFooterWithExitCode1(): void {

        $obj = new TestCopySkeletonCommand();

        $this->assertNull($obj->displayFooter($this->style, 1, 0));
    }

    /**
     * Tests the displayResult() method.
     *
     * @return void
     */
    public function testDisplayResult(): void {

        $obj = new TestCopySkeletonCommand();

        $arg = [];
        $this->assertEquals(0, $obj->displayResult($this->style, $arg));
    }

    /**
     * Tests the displayResult() method.
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
     * Tests the getResourcesDirectory() method.
     *
     * @return void
     */
    public function testGetResourcesDirectory(): void {

        // Set an Helper set mock.
        $helperSet = $this->getMockBuilder(HelperSet::class)->disableOriginalConstructor()->getMock();

        // Set an Application mock.
        $application = $this->getMockBuilder(Application::class)->disableOriginalConstructor()->getMock();
        $application->expects($this->any())->method("getHelperSet")->willReturn($helperSet);
        $application->expects($this->any())->method("getKernel")->willReturn($this->kernel);

        $obj = new TestCopySkeletonCommand();
        $obj->setApplication($application);

        if (40000 <= Kernel::VERSION_ID) {
            $this->assertRegExp("/\/templates\/bundles$/", $obj->getResourcesDirectory());
        } else {
            $this->assertRegExp("/\/app\/Resources$/", $obj->getResourcesDirectory());
        }
    }

    /**
     * Tests the getResourcesDirectory() method.
     *
     * @return void
     */
    public function testGetResourcesDirectoryWithInvalidArgumentException(): void {

        // Set an Helper set mock.
        $helperSet = $this->getMockBuilder(HelperSet::class)->disableOriginalConstructor()->getMock();

        // Set an Application mock.
        $application = $this->getMockBuilder(Application::class)->disableOriginalConstructor()->getMock();
        $application->expects($this->any())->method("getHelperSet")->willReturn($helperSet);

        $obj = new TestCopySkeletonCommand();
        $obj->setApplication($application);

        try {

            $obj->getResourcesDirectory();
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The application kernel is null", $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.command.copy_skeleton", CopySkeletonCommand::SERVICE_NAME);

        $obj = new CopySkeletonCommand();

        $this->assertEquals("Copy skeleton under the app/Resources directory", $obj->getDescription());
        $this->assertEquals(CopySkeletonCommand::COMMAND_HELP, $obj->getHelp());
        $this->assertEquals("wbw:core:copy-skeleton", $obj->getName());
    }
}
