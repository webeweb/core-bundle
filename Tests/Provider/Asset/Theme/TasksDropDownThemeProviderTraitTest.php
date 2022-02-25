<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme;

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\TasksDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestTasksDropDownThemeProviderTrait;

/**
 * Tasks drop down theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class TasksDropDownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setTasksDropDownThemeProvider()
     *
     * @return void
     */
    public function testSetTasksDropDownThemeProvider(): void {

        // Set a Tasks drop down theme provider mock.
        $tasksDropDownThemeProvider = $this->getMockBuilder(TasksDropDownThemeProviderInterface::class)->getMock();

        $obj = new TestTasksDropDownThemeProviderTrait();

        $obj->setTasksDropDownThemeProvider($tasksDropDownThemeProvider);
        $this->assertSame($tasksDropDownThemeProvider, $obj->getTasksDropDownThemeProvider());
    }
}
