<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Mailer;

use Symfony\Component\Mailer\MailerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Mailer\TestMailerTrait;

/**
 * Mailer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Mailer
 */
class MailerTraitTest extends AbstractTestCase {

    /**
     * Test setMailer()
     *
     * @return void
     */
    public function testSetMailer(): void {

        // Set a Mailer mock.
        $mailer = $this->getMockBuilder(MailerInterface::class)->getMock();

        $obj = new TestMailerTrait();

        $obj->setMailer($mailer);
        $this->assertSame($mailer, $obj->getMailer());
    }
}
