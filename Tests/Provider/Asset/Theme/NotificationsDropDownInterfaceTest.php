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

/**
 * Notifications drop down theme provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Theme
 */
class NotificationsDropDownThemeProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.theme.notifications_drop_down", NotificationsDropDownThemeProviderInterface::SERVICE_NAME);
    }
}
