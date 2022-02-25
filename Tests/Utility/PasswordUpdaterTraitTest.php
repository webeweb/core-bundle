<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Utility;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Utility\TestPasswordUpdaterTrait;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdaterInterface;

/**
 * Password updater trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class PasswordUpdaterTraitTest extends AbstractTestCase {

    /**
     * Tests setPasswordUpdater()
     *
     * @return void
     */
    public function testSetPasswordUpdater(): void {

        // Set a Password updater mock.
        $passwordUpdater = $this->getMockBuilder(PasswordUpdaterInterface::class)->getMock();

        $obj = new TestPasswordUpdaterTrait();

        $obj->setPasswordUpdater($passwordUpdater);
        $this->assertSame($passwordUpdater, $obj->getPasswordUpdater());
    }
}
