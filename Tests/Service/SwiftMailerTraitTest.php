<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use Swift_Mailer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestSwiftMailerTrait;

/**
 * Swift mailer trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class SwiftMailerTraitTest extends AbstractTestCase {

    /**
     * Tests the setSwiftMailer() method.
     *
     * @return void
     */
    public function testSetSwiftMailer(): void {

        // Set a Swift mailer mock.
        $swiftMailer = $this->getMockBuilder(Swift_Mailer::class)->disableOriginalConstructor()->getMock();

        $obj = new TestSwiftMailerTrait();

        $obj->setSwiftMailer($swiftMailer);
        $this->assertSame($swiftMailer, $obj->getSwiftMailer());
    }
}
