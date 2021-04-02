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

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\NotificationsDropDownThemeProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Provider\Theme\TestNotificationsDropDownThemeProviderTrait;

/**
 * Notifications drop down theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class NotificationsDropDownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the setNotificationsDropDownThemeProvider() method.
     *
     * @return void
     */
    public function testSetNotificationsDropDownThemeProvider(): void {

        // Set a Notifications drop down theme provider mock.
        $notificationsDropDownThemeProvider = $this->getMockBuilder(NotificationsDropDownThemeProviderInterface::class)->getMock();

        $obj = new TestNotificationsDropDownThemeProviderTrait();

        $obj->setNotificationsDropDownThemeProvider($notificationsDropDownThemeProvider);
        $this->assertSame($notificationsDropDownThemeProvider, $obj->getNotificationsDropDownThemeProvider());
    }
}
