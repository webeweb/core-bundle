<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Notification;

use WBW\Bundle\CoreBundle\Asset\Notification\AbstractNotification;
use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;

/**
 * Test notification.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Notification
 */
class TestNotification extends AbstractNotification {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("t", "c");
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): NotificationInterface {
        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): NotificationInterface {
        return parent::setType($type);
    }
}