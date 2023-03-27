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
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Style\StyleInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractCommandTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestAbstractCommand;

/**
 * Abstract command test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class AbstractCommandTest extends AbstractCommandTestCase {

    /**
     * Tests displayHeader()
     *
     * @return void
     */
    public function testDisplayHeader(): void {

        $obj = new TestAbstractCommand();

        $this->assertNull($obj->displayHeader($this->style, ""));
    }

    /**
     * Tests displayTitle()
     *
     * @return void
     */
    public function testDisplayTitle(): void {

        $obj = new TestAbstractCommand();

        $this->assertNull($obj->displayTitle($this->style, ""));
    }

    /**
     * Tests getCheckbox()
     *
     * @return void
     */
    public function testGetCheckbox(): void {

        $obj = new TestAbstractCommand();

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertEquals("<fg=green;options=bold>\xE2\x9C\x94</>", $obj->getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>!</>", $obj->getCheckbox(false));
        } else {

            $this->assertEquals("<fg=green;options=bold>OK</>", $obj->getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>WARNING</>", $obj->getCheckbox(false));
        }
    }

    /**
     * Tests getKernel()
     *
     * @return void
     */
    public function testGetKernel(): void {

        // Set a Helper set mock.
        $helperSet = $this->getMockBuilder(HelperSet::class)->disableOriginalConstructor()->getMock();

        // Set an Application mock.
        $application = $this->getMockBuilder(Application::class)->disableOriginalConstructor()->getMock();
        $application->expects($this->any())->method("getHelperSet")->willReturn($helperSet);
        $application->expects($this->any())->method("getKernel")->willReturn($this->kernel);

        $obj = new TestAbstractCommand();
        $obj->setApplication($application);

        $this->assertSame($this->kernel, $obj->getKernel());
    }

    /**
     * Tests newStyle()
     *
     * @return void
     */
    public function testNewStyle(): void {

        $obj = new TestAbstractCommand();

        $res = $obj->newStyle($this->input, $this->output);
        $this->assertInstanceOf(StyleInterface::class, $res);

        $this->assertNotNull($res);
    }
}
