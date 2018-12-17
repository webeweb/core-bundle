<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Notification;

use WBW\Bundle\CoreBundle\Notification\AbstractNotification;

/**
 * Test notification.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Notification
 */
class TestNotification extends AbstractNotification {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null, null);
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($content) {
        return parent::setContent($content);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type) {
        return parent::setType($type);
    }

}
