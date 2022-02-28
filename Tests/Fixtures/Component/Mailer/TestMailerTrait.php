<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Mailer;

use WBW\Bundle\CoreBundle\Component\Mailer\MailerTrait;

/**
 * Test mailer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\SwiftMailer
 */
class TestMailerTrait {

    use MailerTrait {
        setMailer as public;
    }
}