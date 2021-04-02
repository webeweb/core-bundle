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

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestApplicationThemeProviderTrait;

/**
 * Application theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class ApplicationThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setApplicationThemeProvider() method.
     *
     * @return void
     */
    public function testSetApplicationThemeProvider(): void {

        // Set an Application theme provider mock.
        $applicationThemeProvider = $this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock();

        $obj = new TestApplicationThemeProviderTrait();

        $obj->setApplicationThemeProvider($applicationThemeProvider);
        $this->assertSame($applicationThemeProvider, $obj->getApplicationThemeProvider());
    }
}
